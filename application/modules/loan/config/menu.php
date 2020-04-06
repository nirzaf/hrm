<?php

// module name
$HmvcMenu["loan"] = array(
    //set icon
    "icon"           => "<i class='fa fa-money'></i>", 
    
 //group level name
    "loan_grand" => array(
        //menu name
       
            "controller" => "Loan",
            "method"     => "create_grandloan",
            "permission" => "read"
       
    ), 
  "loan_installment" => array(
        //menu name
      
            "controller" => "Loan",
            "method"     => "create_installment",
            "permission" => "read"
       
        
    ), 
  "loan_report" => array(
            "controller" => "Loan",
            "method"     => "loan_report",
            "permission" => "read"  
    ), 
    
);
   

 