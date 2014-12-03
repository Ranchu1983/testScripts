<?php

function change_name2($mac, $json_name, $Step){

	$json_file = get_json($mac,$json_name);
	

	$test_values_in_an_array=array("new name","123456789","FFFFFFF","!@#$%^&*)");
	$length = count($test_values_in_an_array);

	$varble=$test_values_in_an_array[$Step-1];

	$json_file->settings->data->bed_name=$varble;

	post_json($mac,$json_name,$json_file);
	
	$test_case = "Setting.Json - Change name > new name <br/>";
	$Message = '
	
	is engine name changed to "'.$varble.'"? 	';
	Show_case($test_case, $Message);
	logging($_SESSION["filename"], $Message );
	if( $Step >= $length)
		{return "complete";}
	else
		{return "next";}
}
?>


