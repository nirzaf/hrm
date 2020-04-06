<?php

// module name
$HmvcMenu["asset"] = array(
    //set icon
    "icon"           => "<i class='fa fa-diamond' aria-hidden='true'></i>

", 
    
 //group level name
    "asset_type" => array(
        //menu name
       "add_type" => array(
        //menu name
       
            "controller" => "type_controller",
            "method"     => "type_form",
            "permission" => "create"
        
    ), 
       "type_list" => array(
        //menu name
       
            "controller" => "type_controller",
            "method"     => "type_list",
            "permission" => "read"
        
    ), 
        
    ), 
    // equipment
     "equipment" => array(
        //menu name
       "add_equipment" => array(
        //menu name
       
            "controller" => "equipment_controller",
            "method"     => "equipment_form",
            "permission" => "create"
        
    ), 
       "equipment_list" => array(
        //menu name
       
            "controller" => "equipment_controller",
            "method"     => "equipment_list",
            "permission" => "read"
        
    ), 
        
    ), 
     // equipment maping
     "asset_assignment" => array(
        //menu name
       "assign_asset" => array(
        //menu name
       
            "controller" => "equipment_maping",
            "method"     => "maping_form",
            "permission" => "create"
        
    ), 
       "assign_list" => array(
        //menu name
       
            "controller" => "equipment_maping",
            "method"     => "maping_list",
            "permission" => "read"
        
    ), 
    ), 

          "return" => array(    
     "return_asset" => array(
        //menu name
       
            "controller" => "equipment_maping",
            "method"     => "return_asset",
            "permission" => "create"
        
    ), 
      "return_list" => array(
        //menu name
       
            "controller" => "equipment_maping",
            "method"     => "return_list",
            "permission" => "read"
        
    ), 
  ),
    
);
   

 