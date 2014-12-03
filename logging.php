<?php
function create_log( )
{
	if (!file_exists('TestLog')) {
    mkdir('TestLog', 0777, true);
	}
	
	date_default_timezone_set('EST');
	$file = "TestLog\\".date('m_d_H_i_s').$_SESSION["mac"].'.log';
	$myfile = fopen("TestLog\\".$file, "w");
	$message = date('y_m_d_H_i_s').'---'.$_SESSION["mac"]."---test log";
	fwrite($myfile, $message );
	#echo $file;
	return $file;
}

function logging($location, $message )
{	
	$myfile = fopen($location, "a");
	fwrite($myfile, $message );}

function close_log($location)
	{	fclose($location);	}



?>