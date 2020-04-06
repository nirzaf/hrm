<?php
// module directory name
$HmvcConfig['tax']["_title"]     = "TAX Details ";
$HmvcConfig['tax']["_description"] = "Simple tax processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['tax']['_database'] = true;
$HmvcConfig['tax']["_tables"] = array( 
	'payroll_tax_setup',
	'payroll_tax_collection'
	  
);
