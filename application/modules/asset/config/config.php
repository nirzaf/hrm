<?php
// module directory name
$HmvcConfig['asset']["_title"]     = "asset Details ";
$HmvcConfig['asset']["_description"] = "Simple asset";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['asset']['_database'] = true;
$HmvcConfig['asset']["_tables"] = array( 
	'equipment_type',
	'equipment',
	'employee_equipment',
	  
);
