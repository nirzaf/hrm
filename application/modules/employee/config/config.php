<?php
// module directory name
$HmvcConfig['employee']["_title"]     = "Employee Details ";
$HmvcConfig['employee']["_description"] = "Simple hrm processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['employee']['_database'] = true;
$HmvcConfig['employee']["_tables"] = array( 
	'position',
	'employee_performance',
	'employee_salary_payment',
	'employee_history',
	  
);

