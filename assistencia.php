<?php
	include("inc/connect.php");
	$assistencia =  $_GET['assistencia'];
	$actuacio = $_GET['actuacio_id'];
	settype($actuacio, 'int');
	$employee = $_GET['emp_id'];
	settype($employee, 'int');

	$sql="UPDATE hr_employee_actuacio SET assistencia = " . $assistencia . " WHERE id = '" . $actuacio . "' AND employee_id = '" . $employee . "';";
	
	
	$result = pg_query($conn, $sql);
	header("Location:".$_SERVER["HTTP_REFERER"]);
?>