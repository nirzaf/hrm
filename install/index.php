<?php 
    //handling error reporting  
    error_reporting(E_ALL);

     // session start
    ini_set('session.use_trans_sid', false);
    ini_set('session.use_cookies', true);
    ini_set('session.use_only_cookies', true);
    $https = false;
    if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] != 'off') $https = true;
    $dirname = rtrim(dirname($_SERVER['PHP_SELF']), '/').'/';
    session_name('ci_installer');
    session_set_cookie_params(0, $dirname, $_SERVER['HTTP_HOST'], $https, true);
    session_start();

    //add ./vendor/autoload.php file
    require_once __DIR__.'/vendor/autoload.php';

    use Php\Requirements;
    use Php\Validation;
    use Php\DbImport;
    use Php\FileWrite;

    // //create object for each class
    $Requirements = new Requirements();
    $Validation   = new Validation();
    $DbImport     = new DbImport();
    $FileWrite    = new FileWrite(); 

    //set the path of files
    $path = [
        'sql_path'      => 'sql/install.sql',
        'template_path' => 'php/Database.php',
        'output_path'   => '../application/config/database.php',
        'config_path'   => '../application/config/config.php',
    ];

    $message      = null; 

    //generate token
    if (empty($_SESSION['_token'])) {
        if (function_exists('mcrypt_create_iv')) {
            $_SESSION['_token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
        } else {
            $_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(32));
        }
    }
    $token = $_SESSION['_token']; 


    //condition for step 3
    if (isset($_GET['complete']) && $Validation->checkEnvFileExists() === false) {
        //create a env file in Flag directory
        $FileWrite->createEnvFile();
        //destroy session data
        session_destroy();
    } else {
        $Validation->checkEnvFileExists();
    }
    //ends of step 3

    //Submit form data 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //validate all input
        if ($Validation->run($_POST)===true) {
            //check install.sql file is exists in sql directory
            if ($Validation->checkFileExists($path['sql_path'])==false) {
                $message .= "<li>install.sql file is not exists in sql/ directory!</li>";
            } else {
                //first create the database, then create tables, then write config and database file
                if ($FileWrite->databaseConfig($path,$_POST) === false) {
                    //write database file
                    $message .= "<li>The database configuration file could not be written, ";
                    $message .= "please chmod application/config/database.php file to 777</li>";
                } elseif ($FileWrite->baseUrl($path['config_path']) === false) {
                    //write config file
                    $message .= "<li>The config  file could not be written, ";
                    $message .= "please chmod application/config/config.php file to 777</li>";
                } elseif ($DbImport->createDatabase($_POST) === false) {
                    $message .= "<li>The database could not be created, ";
                    $message .= "please verify your settings.</li>";
                } elseif ($DbImport->createTables($_POST) === false) {
                    $message .= "<li>The database tables could not be created, ";
                    $message .= "please verify your settings.</li>";
                } else { 
                    //redirect to complete installation
                    header('location: index.php?complete');
                }   
            }

        } else {
            //Display error message
            $message = $Validation->run($_POST);
        }
    }
    //Ends of submit form data 

?> 

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">

        <title>Human Resource Management System Installer</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- custom css  -->
        <link rel="stylesheet" href="assets/css/style.css"> 

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- begin of container -->
        <div class="container"> 
            <!-- begin of row -->
            <div class="row"> 
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1"> 

                <!-- begin of step 1 -->
                <?php 
                if (isset($_GET['step1']) || (!isset($_GET['step1']) && !isset($_GET['step2']) && !isset($_GET['complete']))) {  
                ?>
                <div class="row">
                    <div class="app_title"> 
                        <h1><img src="assets/img/icon.png" alt="logo"> Human Resource Management System Installer</h1>
                    </div>
                    <div class="app_content">
                        <div class="row">
                            <div class="col-sm-12">
                                    <h3 class="title text-center">Directory permissions & requirements</h3>
                                    <!-- display requirements -->
                                    <?= $Requirements->directoriesAndPermission(); ?>
                                    <?= $Requirements->server();      ?>

                                <div class="divider"></div>
                                <a href="index.php?step2" class="cbtn pull-right">Next</a>
                            </div>
                        </div>
                    </div>
                    <div class="app_footer"> 
                        <h3>Developed by bdtask</h3>
                    </div>
                </div>
                <?php 
                } 
                ?>
                <!-- ends of step 1 -->


                <!-- begin of step 2 -->
                <?php 
                if (isset($_GET['step2'])) { 
                ?>
                <div class="row">
                    <div class="app_title"> 
                        <h1><img src="assets/img/icon.png" alt="logo"> Human Resource Management System Installer</h1>
                    </div>
                    <div class="app_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="title text-center margin">App Installation Information</h3>

                                    <?php
                                        if (!empty($message)) {
                                            echo "<div class=\"alert alert-danger\"><ul>$message</ul></div>";
                                        }
                                    ?>

                                <form action="#" method="post" >

                                    <input type="hidden" name="_token" value="<?= (!empty($token)?$token:null) ?>"/>

                                    <div class="form-group">
                                        <label for="database">Database Name </label>
                                        <input type="text" name="database" class="form-control" id="database" placeholder="Database Name" value="<?= (!empty($_POST['database'])?$_POST['database']:null) ?>">
                                    </div> 
                                    <div class="form-group">
                                        <label for="username">Username </label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?= (!empty($_POST['username'])?$_POST['username']:null) ?>">
                                    </div> 
                                    <div class="form-group">
                                        <label for="password">Password </label>
                                        <input type="text" name="password" class="form-control" id="password" placeholder="Password" value="<?= (!empty($_POST['password'])?$_POST['password']:null) ?>">
                                    </div>  
                                    <div class="form-group">
                                        <label for="hostname">Host Name </label>
                                        <input type="text" name="hostname" class="form-control" id="hostname" placeholder="Host Name"  value="<?= (!empty($_POST['hostname'])?$_POST['hostname']:"localhost") ?>">
                                    </div>  
                                    <div class="divider"></div>
                                    <a href="index.php?step1" class="cbtn pull-left">Previous</a>
                                    <button type="submit" class="cbtn pull-right">Next</button>
                                </form>

                            </div>
                        </div>
                    </div> 
                    <div class="app_footer"> 
                        <h3>Developed by bdtask</h3>
                    </div>
                </div>
                <?php } ?>
                <!-- ends of step 3 -->



                <!-- begin of step 3 -->
                <?php if (isset($_GET['complete'])) { ?>
                <div class="row">
                    <div class="app_title"> 
                        <h1><img src="assets/img/icon.png" alt="logo"> Human Resource Management System Installer</h1>
                    </div>
                    <div class="app_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="title text-center margin">Installation complete</h3> 
                                
                                <div class="alert alert-success">
                                    <strong>Your application installed successfully !!!</strong>
                                </div>

                                <div class="divider"></div>

                                <h3 class="text-center" id="btn-before">&nbsp;</h3>
                                <div class="text-center hide" id="btn-complete">
                                    <a href="index.php" class="btn cbtn">Click to launch your application </a>
                                </div>

                            </div>
                        </div>
                    </div> 
                    <div class="app_footer"> 
                        <h3>Developed by bdtask</h3>
                    </div>
                </div>
                <?php } ?>
                <!-- ends of step3 -->


                </div>
            </div>
            <!-- ends of row -->
        </div> 
        <!-- ends of container -->


        <!-- start of javascript  -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {

            var wait = 11000; //10 second

            var time = 10;
            setInterval(function(){
             $("#btn-before").html("You need to wait "+time+" second before you can proceed");
             time--;
            }, 1000);

            setTimeout(function() {
                $("#btn-before").addClass('hide');
                $("#btn-complete").removeClass('hide');
            }, wait);

        });
        </script>
        <!-- ends of javascript -->

        
    </body>
</html>