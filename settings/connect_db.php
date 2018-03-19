<?php 
	require_once "db_settings";
	
	$link=mysqli_connect($host, $user_name, $pass, $db_name);
	
	
	
	mysqli_close($link);
?>