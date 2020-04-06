<?php
// module directory name
$HmvcConfig['reports']["_title"]     = "reports Details ";
$HmvcConfig['reports']["_description"] = "Simple reports";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['reports']['_database'] = true;
$HmvcConfig['reports']["_tables"] = array( 
	'equipment_type',
	'equipment',
	'employee_equipment',
	  
);
