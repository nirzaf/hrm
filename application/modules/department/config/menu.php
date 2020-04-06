<?php

// module name
$HmvcMenu["department"] = array(
    //set icon
    "icon"           => "<i class='fa fa-university' aria-hidden='true'></i>
", 

    
 //group level name
    "department" => array(
        //menu name
       
            "controller" => "Department_controller",
            "method"     => "create_dept",
            "permission" => "create"
        
    ), 
    //group level name
   "division" => array(
    "add_division" => array(
        //menu name
       
            "controller" => "Division_controller",
            "method"     => "division_form",
            "permission" => "create"
        
    ), 
    "division_list" => array(
        //menu name
       
            "controller" => "Division_controller",
            "method"     => "index",
            "permission" => "read"
        
    ), 
   ),
    
    
);
   

 