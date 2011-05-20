<?php
session_start();

	include "../../DB/conexion.php";

	$horaT = $_REQUEST['phphoraT'];
	
	$i = 0;
	
	$result = mysql_query("SELECT * from turno");
	if (!$horaT){
		echo '<td width="123">Turno</td><td width="175"><select name="horaT" id="horaT" onchange="horaturno()" ><option value="0" {seleccionet0}>Seleccione</option>';
		
		while ($result1 = mysql_fetch_assoc($result)){
			$i = $i+1;
			$opciones = $opciones.'<option value="'.$result1['idturno'].'" {seleccionet'.$i.'}>'.$result1['nombreturno'].'</option>'; 
	
		}
		$opciones = $opciones.'</select><span class="colorR" >*</span></td><div id="horas"></div>';
		
		echo $opciones;
	}
		
		
	else{

		$result = mysql_query("SELECT * from turno where idturno = '$horaT'");
		$result1 = mysql_fetch_assoc($result);
		echo '<td>Hora inicio: </td><td>'.$result1['horaini'].'</td><BR><td>Hora Fin: </td><td>'.$result1['horafin'].'</td>';
	
			
	}
	

?>
