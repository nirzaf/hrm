<?php
// module directory name
$HmvcConfig['circularprocess']["_title"]     = "Employee circulation processing System";
$HmvcConfig['circularprocess']["_description"] = "Simple circulation processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['circularprocess']['_database'] = true;
$HmvcConfig['circularprocess']["_tables"] = array( 
	'candidate_basic_info',
	'candidate_education_info',
	'candidate_workexperience',
	'candidate_shortlist',
	'candidate_interview',
	'candidate_selection',
	'job_advertisement'
	  
);
