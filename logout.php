<?php
	session_start();
	$_SESSION['sessio_iniciada'] = false;
	session_destroy();

	header("Location: index.php");
?>