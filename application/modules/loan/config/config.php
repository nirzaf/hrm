<?php
// module directory name
$HmvcConfig['loan']["_title"]     = "Loan Details ";
$HmvcConfig['loan']["_description"] = "Simple loan processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['loan']['_database'] = true;
$HmvcConfig['loan']["_tables"] = array( 
	'grand_loan',
	'loan_installment',
	  
);
