<?php

	include "../../DB/conexion.php";

	$cedulaE = $_REQUEST['phpCedulaE'];
	
	$result = mysql_query("SELECT * from empleado where cedulaempleado = '$cedulaE'");
	if ($result1 = mysql_fetch_assoc($result)){
		echo '<img src="../IMAGENES/error.png" width="15" height="15">';
		echo "La cedula ya se encuentra registrada";
		echo ' <input name="errorCedula" type="hidden" id="errorCedula" value="1" />';
		

	}
	else
	{
	
		echo '<img src="../IMAGENES/check.png" width="22" height="20">';
		echo '<input name="errorCedula" type="hidden" id="errorCedula" value="0" />';
	}
	

?>
