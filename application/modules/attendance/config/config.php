<?php
// module directory name
$HmvcConfig['attendance']["_title"]     = "attendance Details ";
$HmvcConfig['attendance']["_description"] = "Simple attendance processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['attendance']['_database'] = true;
$HmvcConfig['attendance']["_tables"] = array( 
	'emp_attendance'
	  
);
