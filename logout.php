<?php
	session_start();
	$_SESSION['sesionIniciada'] = false;
	session_destroy();

	header("Location: index.php");
?>