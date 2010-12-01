<?php
	session_start();
	header("Location: index.php");
	require_once("../classes/Site.php");
	session_destroy();
	
	exit;  

?>