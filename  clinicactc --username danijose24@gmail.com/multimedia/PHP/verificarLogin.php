<?php
session_start();

	include "../DB/conexion.php";
	require_once ("../CLASSES/Panel.php");
	
	$usuario = $_REQUEST['usuario'];
	
	$password = $_REQUEST['epassword'];
	
	$result = mysql_query("SELECT nombreempleado, apellidoempleado FROM empleado WHERE cedulaempleado = '$usuario' AND contrasenaempleado = '$password'");
	
	if ($result1 = mysql_fetch_assoc($result)){
		

		$_SESSION['nombre'] = $result1['nombreempleado']." ".$result1['apellidoempleado'];
		$_SESSION['cedula'] = $usuario;
		//include "DRIVER/validarSesion.php";
		header ('Location: index.php');
		
	}
	else{
		$pnlmain = new Panel("../html/login.html");
		$pnlmain->add("usuario",$usuario);
		$pnlmain->add("error","El numero de cedula o contrasena con incorrectas");
		$pnlmain->show();

		
	}
	
?>
	