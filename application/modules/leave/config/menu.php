<?php

// module name
$HmvcMenu["leave"] = array(
    //set icon
    "icon"           => "<i class='fa fa-plane' aria-hidden='true'></i>", 
    
 //group level name
    "weekly_holiday" => array(
        //menu name
       
            "controller" => "Leave",
            "method"     => "create_weekleave",
            "permission" => "read"
        
    ), 
    "holiday" => array(
       
        
        //menu name
      
            "controller" => "Leave",
            "method"     => "holiday_view",
            "permission" => "read"
      
    ), 
    //group level name
    "others_leave_application" => array(  
        //menu name
        "add_leave_type" => array(  
            "controller" => "Leave",
            "method"     => "add_leave_type",
            "permission" => "read"
        ),

        //menu name
        "leave_application" => array(  
            "controller" => "Leave",
            "method"     => "others_leave",
            "permission" => "read"
        ),
    ), 
 
    
);
   

 