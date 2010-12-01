<?php
session_start();
	require_once ("../CLASSES/Panel.php");
	include "DRIVER/validarSesion.php";
	include "../DB/conexion.php";

	
	if ($sesion){
		$pnlmain = new Panel("../html/main.html");
		$pnlmain->add("content",'Bienvenido al sitema ORMS');
		$pnlmain->add("usuario",$_SESSION['nombre']);
			
			
	}
	
	
	else{
		$pnlmain = new Panel("../html/login.html");
		
	}
	
	$pnlmain->show();
?>
	