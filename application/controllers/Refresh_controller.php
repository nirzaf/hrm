<?php defined('BASEPATH') or exit('No direct script access allowed');

class Refresh_controller extends CI_Controller {

  public function ref(){
    
          $database="softest8_hrm";
          $mysqli = mysqli_connect("localhost", "softest8_hrm", "!g3LkFc&,=l_", $database);
          // Check for errors
          if (mysqli_connect_errno()){
              echo "mysqli not connect";
          }

      /* query all tables */
          $sql = "SHOW TABLES";
          if($result = mysqli_query($mysqli,$sql)){
            /* add table name to array */
            while($row = mysqli_fetch_row($result)){
              $found_tables[]=$row[0];
            }
          }
          else{
            die("Error, could not list tables.");
          }
 
          /* loop through and drop each table */
          foreach($found_tables as $table_name){
            $sql = "DROP TABLE $database.$table_name";
            if($result = mysqli_query($mysqli,$sql)){
              // echo "Success - table $table_name deleted.<br>";
            }
            else{
              // echo "Error deleting";
            }
          }
 
         // Open the default SQL file
         $query = file_get_contents('install/sql/install.sql');
 
          // Execute a multi query
          $multi_query = $mysqli->multi_query($query);
          // Close the connection
          $mysqli->close();
 
          if ($multi_query){
          } else {
               // echo "Database not created";
          }
 
          
 
   }

}