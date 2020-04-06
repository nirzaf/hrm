<?php

// module name
$HmvcMenu["circularprocess"] = array(
    //set icon
    "icon"           => "<i class='fa fa-newspaper-o'></i>", 
    
   

    //group level name
    "candidate_basic_info" => array(
        //menu name
 //menu name
        'add_canbasic_info'   => array( 
            "controller" => "Candidate",
            "method"     => "caninfo_create",
            "permission" => "create"
        ), 
        'can_basicinfo_list'      => array( 
            "controller" => "Candidate",
            "method"     => "candidateinfo_view",
            "permission" => "read"
        ),
       
    ), 
    
    "candidate_shortlist" => array(
        //menu name

            "controller" => "Candidate_select",
            "method"     => "create_shortlist",
            "permission" => "create"
      
    ), 

     "candidate_interview" => array(
        //menu name
       
            "controller" => "Candidate_select",
            "method"     => "create_interview",
            "permission" => "create"
        
    ),     

      "candidate_selection" => array(
  
            "controller" => "Candidate_select",
            "method"     => "create_selection",
            "permission" => "create"
     
    ),     

);
   

 