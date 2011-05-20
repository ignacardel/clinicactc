<?php
//	session_start();
	$pathFix = dirname(__FILE__);
	require_once ("$pathFix/Panel.php");
	//include "../db/conexion.php";
	
	$pnlmain = new Panel("../html/login.html");
	
	

	$pnlmain->add("activo",'id="active"');
			
	
	$pnlmain->show();

?>
	