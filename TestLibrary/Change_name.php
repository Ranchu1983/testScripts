<?php

// include 'ran_func.php';


function change_name($mac, $json_name, $Step){

	$json_file = get_json($mac,$json_name);
	

	$test_values_in_an_array=array("new name","123456789","FFFFFFF","!@#$%^&*)");
	$length = count($test_values_in_an_array);

	$varble=$test_values_in_an_array[$Step-1];

	#echo $varble;
	$json_file->settings->data->bed_name=$varble;
	#echo "<br/><br/>";
	#print_r ($json_file);
	post_json($mac,$json_name,$json_file);
	
	#log message ---------------------
	$test_case = "Setting.Json - data - bed name";
	$Message = '
	
	is engine name changed to "'.$varble.'"?	';
	Show_case($test_case, $Message);
	logging($_SESSION["filename"], $Message );
	
	#tell run_test.php run the same test with increase step or next test-------------------
	if( $Step >= $length)
		{return "complete";}  //this test complete
	else
		{return "next";} //run next step of this case


	}
	

	
	
			
?>