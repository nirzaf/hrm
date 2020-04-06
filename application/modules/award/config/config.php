<?php
// module directory name
$HmvcConfig['award']["_title"]     = "Award Details ";
$HmvcConfig['award']["_description"] = "Simple Award";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['award']['_database'] = true;
$HmvcConfig['award']["_tables"] = array( 
	'award',
	
	  
);
