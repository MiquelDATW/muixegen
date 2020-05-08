<?php
	include("inc/conexio.php");
	$sql="UPDATE hr_employee_actuacio SET assistencia = " . $_GET['assistencia'] . " WHERE id = '" . $_GET['id_actuacio'] . "' AND employee_id = '" . $_GET['user_id'] . "';";
	
	
	$result = pg_query($conn, $sql);
	header("Location:".$_SERVER["HTTP_REFERER"]);
?>