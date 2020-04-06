<?php
// module directory name
$HmvcConfig['department']["_title"]     = "Department Details ";
$HmvcConfig['department']["_description"] = "Department info";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['department']['_database'] = true;
$HmvcConfig['department']["_tables"] = array( 
	'department',
	
	  
);
