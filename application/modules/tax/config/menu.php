<?php

// module name
$HmvcMenu["tax"] = array(
    //set icon
    "icon"           => "<i class='fa fa-credit-card'></i>", 
    
 //group level name
    "tax_setup" => array(
        //menu name
       
            "controller" => "Tax",
            "method"     => "create_tax_setup",
            "permission" => "read"
       
    ), 
    // "tax_collection" => array(
       
       
    //         "controller" => "Tax",
    //         "method"     => "tax_collection_view",
    //         "permission" => "read"
   
    // ), 
 
    
);
   

 