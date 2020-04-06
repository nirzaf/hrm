<?php
// module directory name
$HmvcConfig['payroll']["_title"]     = "Payroll Details ";
$HmvcConfig['payroll']["_description"] = "Simple payroll processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['payroll']['_database'] = true;
$HmvcConfig['payroll']["_tables"] = array( 
	'salary_type',
	'salary_sheet_generate',
	'employee_salary_setup',
	'salary_setup_header',
	  
);
