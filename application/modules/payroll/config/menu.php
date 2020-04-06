<?php

// module name
$HmvcMenu["payroll"] = array(
    //set icon
    "icon"           => "<i class='fa fa-credit-card'></i>", 
    
 //group level name
    "salary_type_setup" => array(
        //menu name
      
            "controller" => "Payroll",
            "method"     => "create_salary_setup",
            "permission" => "read"     
    ), 
 
  "salary_setup" => array(
        //menu name
       
            "controller" => "Payroll",
            "method"     => "create_s_setup",
            "permission" => "create"
       
    ), 
   "salary_generate" => array(
        //menu name
        
            "controller" => "Payroll",
            "method"     => "create_salary_generate",
            "permission" => "create"
       
    ), 
    
);
   

 