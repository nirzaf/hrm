<?php

// module name
$HmvcMenu["attendance"] = array(
    //set icon
    "icon"           => "<i class='fa fa-user'></i>", 

    // fleet type
    "attendance" => array( 
        'atn_form'    => array( 
            "controller" => "Home",
            "method"     => "index",
            "permission" => "read"
        ), 
        'atn_report'  => array( 
            "controller" => "Home",
            "method"     => "attenlist",
            "permission" => "read"
        ), 
    ), 

);
   

 