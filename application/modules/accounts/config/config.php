<?php
/*
|___________________________________________________________________
|	-> Configuration variable name must be $HmvcConfig
|	-> Module Name must be unique 
|	-> Module Name must be same as the module directory
|	-> Set a title and description 
|	-> Set true/false if module have database 
|	-> Must be register your database tables
|___________________________________________________________________
|
*/
 
$HmvcConfig['accounts']["_title"]       = "Accounts";
$HmvcConfig['accounts']["_description"] = "Accounts Information";

//Set true/false if module have database 
$HmvcConfig['accounts']['_database'] = true;

// register your module tables. only register tables are imported while installing the module
$HmvcConfig['accounts']["_tables"] = array( 
	'test',
);
