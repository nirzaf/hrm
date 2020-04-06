<?php

// module name
$HmvcMenu["noticeboard"] = array(
    //set icon
    "icon"           => "<i class='fa fa-bell-o' aria-hidden='true'></i>
", 
    
 //group level name
    "notice" => array(
        //menu name
            "controller" => "Notice_controller",
            "method"     => "create_notice",
            "permission" => "read"
        
    ), 
    
    
);
   

 