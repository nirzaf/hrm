<?php
// module directory name
$HmvcConfig['noticeboard']["_title"]     = "Notice Details ";
$HmvcConfig['noticeboard']["_description"] = "Simple Notice";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['noticeboard']['_database'] = true;
$HmvcConfig['noticeboard']["_tables"] = array( 
	'notice_board',
	
	  
);
