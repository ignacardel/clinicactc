<?php
session_start();
	require_once ("../Classes/Panel.php");
	require_once ("DRIVER/validarSesion.php");
	include "../DB/conexion.php";
	
	if ($sesion){
		$pnlmain = new Panel("../html/main.html");
		$pnlmain->add("content",'Bienvenido al sitema ORMS');
		
	}
	else
		$pnlmain = new Panel("../html/login.html");


	$pnlmain->show();
?>
	