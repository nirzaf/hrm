<?php
namespace Php;  

class Requirements
{  

    //function for showing directories and permission requirements
    public function directoriesAndPermission()
    { 
        //set sql file directory
        $dir      = "./sql";
        //variable declaration
        $directories   = null;
        $not_writeable = null;
        $writeable     = null;
        $writeable_success = null;
        $writeable_error   = null;

        //list of directories
        $directories = [
            "../application/config/database.php",
            "../application/config/config.php",
            "php/Database.php",
            "sql/install.sql"
        ]; 
         
        // show all directory and Permissions list
        echo "<table class='table table-bordered table-striped'>";
            echo "<tr>";
                echo "<th>Directory & Permissions</th>";
                echo "<th class='cwidth'>Status</th>";
            echo "</tr>"; 

            //check sql/install.sql file is exists
            if (file_exists('sql/install.sql')) {  
                ob_start();
                foreach ($directories as $file) {
                    if (file_exists($file) && is_writable($file) && is_file($file)) {
                        //set success message for file is writeable
                        $writeable[] = "$file is writeable";
                        //set success status for file is writeable
                        $writeable_success[] = '<span class="label label-success">Success</span>';
                    } else {
                        //set error message for file is not writeable
                        $not_writeable[] = "$file is not writeable";
                        //set error status for file is not writeable
                        $writeable_error[] = '<span class="label label-danger">Error</span>';
                    }
                }
                @ob_clean();
         
                //if some file is not writeable 
                if (sizeof($not_writeable) > 0) { 
                    //set a headline for not writeable file
                    echo "<tr>";
                        echo "<td colspan='2'><div class='alert alert-danger'>Your server does not meet the following requirements.</div></td>";
                    echo "</tr>"; 
                    // show not writeable files
                    for ($i = 0; $i < sizeof($not_writeable); $i++) { 
                        echo "<tr>";
                            echo "<th>".$not_writeable[$i]."</th>";
                            echo "<th>".$writeable_error[$i]."</th>";
                        echo "</tr>";
                    } 

                    //show writeable file
                    if (sizeof($writeable) > 0) { 
                        //set a headline for writeable file
                        echo "<tr>";
                            echo "<td colspan='2'><div class='alert alert-success'>The following requirements were successfully met.</div></td>";
                        echo "</tr>"; 

                        //show writeable file
                        for ($i = 0; $i < sizeof($writeable); $i++) { 
                            echo "<tr>";
                                echo "<th>".$writeable[$i]."</th>";
                                echo "<th>".$writeable_success[$i]."</th>";
                            echo "</tr>";
                        } 
                    }

                } else {  //if all file is  writeable 
                    if (sizeof($writeable) > 0) { 
                        //set a headline for writeable file
                        echo "<tr>";
                            echo "<td colspan='2'><div class='alert alert-success'><strong>Congratulations!</strong> Your server meets the requirements for install application.</div></td>";
                        echo "</tr>"; 
                        //show writeable file
                        for ($i = 0; $i < sizeof($writeable); $i++){ 
                            echo "<tr>";
                                echo "<th>".$writeable[$i]."</th>";
                                echo "<th>".$writeable_success[$i]."</th>";
                            echo "</tr>";
                        }
                    }
                }

            } else {
                 //if install.sql file is not exist in sql directory
                echo "<td colspan='2'><div class='alert alert-danger'><strong>install.sql</strong> file is not available in ./sql/ direcotry</div></td>";
            } 
        echo "</table>";
        // end of directory and Permissions list
     }


    //function for showing server requirement
    public function server()
    {  
        //extension for server 
        $this->extensionCheck([
            'mysqli',
            'session',  
            'mcrypt',
        ]);
    }


    //display server requirements
    public function extensionCheck($extensions=null) 
    {
        $fail = null;
        $pass = null;
        $fail_status = null;
        $pass_status = null;

        //check php version
        if (version_compare(phpversion(), '5.3.7', '<')) {
            //set error message for php version
            $fail[] = 'You need<strong> PHP 5.3.7</strong> (or greater;<strong>Current Version:'.phpversion().')</strong>';
            //set error status for php version
            $fail_status[] = '<span class="label label-danger">Error</span>';
        } else {
            //set success message for php version
            $pass[] ='You have<strong> PHP 5.3.7</strong> (or greater; <strong>Current Version:'.phpversion().')</strong>';
            //set success status for php version
            $pass_status[] = '<span class="label label-success">Success</span>';
        }

        //check server is safe mode
        if (!ini_get('safe_mode')) {
            //set error message for server safe mode
            $fail[] ='Safe Mode is <strong>off</strong>';
            preg_match('/[0-9]\.[0-9]+\.[0-9]+/', shell_exec('mysql -V'), $version);
            //set error status for server safe mode
            $fail_status[] = '<span class="label label-warning">Warning</span>';

            //MySql version check
            ob_start(); 
            phpinfo(INFO_MODULES); 
            $info = ob_get_contents(); 
            ob_end_clean(); 
            $info = stristr($info, 'Client API version'); 
            preg_match('/[1-9].[0-9].[1-9][0-9]/', $info, $match);   
            //Mysql - version compare between current and required version
            if (version_compare($match[0], '4.1.13', '<')) {
                //set error message if mysql version 
                $fail[] = 'You need<strong> MySQL 4.1.13</strong> (or greater; <strong>Current Version:.'.$match[0].')</strong>';
                //set error status for mysql version
                $fail_status[] = '<span class="label label-danger">Error</span>';
            } else {
                //set success message
                $pass[] ='You have<strong> MySQL 4.1.13</strong> (or greater; <strong>Current Version:'.$match[0].')</strong>';
                $pass_status[] = '<span class="label label-success">Success</span>';
            }

        } else { 
            //set success message for server safe mode
            $pass[] = 'Safe Mode is <strong>on</strong>'; 
            //set success status for server safe mode 
            $pass_status[] = '<span class="label label-success">Success</span>';
        }

        //common extension checking proccess
        foreach($extensions as $extension) {
            if (!extension_loaded($extension)) {
                //set error message if extension is not fulfill the requrement
                $fail[] = ' You are missing the <strong>'.$extension.'</strong> extension';
                $fail_status[] = '<span class="label label-danger">Error</span>';
            } else {   
                //set success message if extension is fulfill the requrement
                $pass[] = 'You have the <strong>'.$extension.'</strong> extension';
                $pass_status[] = '<span class="label label-success">Success</span>';
            }
        }
     
        //show all server requirement list
        echo "<table class='table table-bordered table-striped'>";
            //set a title for server requierement
            echo "<tr>";
                echo "<th>Server Requirements</th>";
                echo "<th class='cwidth'>Status</th>";
            echo "</tr>"; 

            //show all success and error message 
            if (sizeof($fail) > 0){ 
                //set a headline for error requirement
                echo "<tr>";
                    echo "<td colspan='2'><div class='alert alert-danger'><strong>Your server does not meet the following requirements.</strong></div></td>";
                echo "</tr>";
                //show error message 
                for($i = 0; $i < sizeof($fail); $i++){
                    echo "<tr>";
                        echo "<th>".$fail[$i]."</th>";
                        echo "<th>".$fail_status[$i]."</th>";
                    echo "</tr>";
                } 
                //show success message
                if(sizeof($pass) > 0){ 
                    echo "<tr>";
                        echo "<td colspan='2'><div class='alert alert-success'>The following requirements were successfully met:</div></td>";
                    echo "</tr>";
                    for($i=0; $i < sizeof($pass); $i++){ 
                        echo "<tr>";
                            echo "<th>".$pass[$i]."</th>";
                            echo "<th>".$pass_status[$i]."</th>";
                        echo "</tr>";
                    }
                }

            } else { 
                //set a headline for success requirement
                echo "<tr>";
                    echo "<td colspan='2'><div class='alert alert-success'><strong>Congratulations!</strong> Your server meets the requirements for install application.</td>";
                echo "</tr>";
                //show all success message
                for($i=0; $i < sizeof($pass); $i++){ 
                    echo "<tr>";
                        echo "<th>".$pass[$i]."</th>";
                        echo "<th>".$pass_status[$i]."</th>";
                    echo "</tr>";
                }
            }
        echo "</table>";
        // ends of server requirement list
    }

}
 