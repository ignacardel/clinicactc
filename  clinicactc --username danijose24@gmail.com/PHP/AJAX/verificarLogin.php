<?php
session_start();

	
	include "../../DB/conexion.php";
	
	$usuario = $_REQUEST['phpUsuario'];
	$password = $_REQUEST['phpPassword'];

	
	$result = mysql_query("SELECT nombreempleado, apellidoempleado FROM empleado WHERE cedulaempleado = '$usuario' AND contrasenaempleado = '$password'");
	
	if ($result1 = mysql_fetch_assoc($result)){
		

		$_SESSION['nombre'] = $result1['nombreempleado']." ".$result1['apellidoempleado'];
		$_SESSION['cedula'] = $usuario;
		
 		
	}
	else{
		echo 'El usuario o contrasena son incorrectos';
		
	}
	
	
?>
	