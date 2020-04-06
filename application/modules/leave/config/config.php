<?php
// module directory name
$HmvcConfig['leave']["_title"]     = "Leave Details ";
$HmvcConfig['leave']["_description"] = "Simple leave processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['leave']['_database'] = true;
$HmvcConfig['leave']["_tables"] = array( 
	'weekly_holiday',
	'payroll_holiday',
	  
);
