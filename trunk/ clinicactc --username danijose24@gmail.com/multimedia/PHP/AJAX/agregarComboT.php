<?php
session_start();

	include "../../DB/conexion.php";


	$numT = $_REQUEST['phpI'];
	$tratamientoE = $_REQUEST['phpTratamientoE'];
	$i = 0;
	
	$result = mysql_query("SELECT * from tratamiento");
	
	echo '<select name="tratamientoE'.$numT.'" id="tratamientoE'.$numT.'"><option value="0" {seleccioneT'.$numT.'}>Seleccione</option>';
	
	while ($result1 = mysql_fetch_assoc($result)){
		
		
		$opciones = $opciones.'<option value="'.$result1['idtratamiento'].'" {seleccioneT'.$numT.$i.'}>'.$result1['descripciontratamiento'].'</option>';
			$i = $i+1;
	
		
	
	}
	$opciones = $opciones.'</select><span class="colorR">*</span><span class="linkp"><a href="#" onclick="agregarComboT('.$numT.')">Agregar/Quitar Tratamiento</a></span><div id="tratamientosP'.$numT.'"></div>';
	
	echo $opciones;


?>
