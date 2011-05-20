<?php

	include "../../DB/conexion.php";

	$cedulaE = $_REQUEST['phpCedulaE'];
	$encabezado;
	$result = mysql_query("SELECT * from empleado where cedulaempleado = '$cedulaE'");
	if (!$result1 = mysql_fetch_assoc($result)){
		echo '<img src="../IMAGENES/error.png" width="15" height="15">';
		echo '<span class="colorR">No se encuentra en nuestra base de datos</span>';
		
	}
	else
	{
		
		
		if ($result1['tipoempleado'] == '1'){
			
			$encabezado = '<table width="875" border="0">
    <tr class="aaaaa">
      <td width="76">Cedula</td>
      <td width="78">Nombre</td>
      <td width="78">Apellido</td>
      <td width="78">Telefono</td>
      <td width="79">Direccion</td>
      <td width="85">Fecha de Nacimiento</td>
      <td width="37">Tipo Empleado</td>
	</tr>
	<tr bgcolor="#A2C2F9">
      <td width="76">'.$result1['cedulaempleado'].'</td>
      <td width="78">'.$result1['nombreempleado'].'</td>
      <td width="78">'.$result1['apellidoempleado'].'</td>
      <td width="78">'.$result1['telefonoempleado'].'</td>
      <td width="79">'.$result1['direccionempleado'].'</td>
      <td width="85">'.$result1['fechanempleado'].'</td>
      <td width="37">Administrador</td>
	  <td width="10" bgcolor="#FFFFFF"><a href="modificarEmpleado.php?deleteid='.$result1['cedulaempleado'].'"><img src="../IMAGENES/editarp.jpg" width="20" height="20"></a></td> 
    </tr></table>';
		}
		else if (($result1['tipoempleado'] == '2')||($result1['tipoempleado'] == '3')){
			
			if ($result1['tipoempleado'] == '2')
				$tipoE = "Cirujano";
			else
				$tipoE = "Ayudante Cirujano";
				
				
			$encabezado = '<table width="875" border="0">
    <tr class="aaaaa">
      <td width="76">Cedula</td>
      <td width="78">Nombre</td>
      <td width="78">Apellido</td>
      <td width="78">Telefono</td>
      <td width="79">Direccion</td>
      <td width="85">Fecha de Nacimiento</td>
      <td width="37">Tipo Empleado</td>
      <td width="84">Honorario</td></tr>
	  <tr bgcolor="#A2C2F9">
      <td width="76">'.$result1['cedulaempleado'].'</td>
      <td width="78">'.$result1['nombreempleado'].'</td>
      <td width="78">'.$result1['apellidoempleado'].'</td>
      <td width="78">'.$result1['telefonoempleado'].'</td>
      <td width="79">'.$result1['direccionempleado'].'</td>
      <td width="85">'.$result1['fechanempleado'].'</td>
      <td width="37">'.$tipoE.'</td>
      <td width="85">'.$result1['costophoraempleado'].'</td>
	  <td width="10" bgcolor="#FFFFFF"><a href="modificarEmpleado.php?deleteid='.$result1['cedulaempleado'].'"><img src="../IMAGENES/editarp.jpg" width="20" height="20"></a></td> 
    </tr></table>';
			
		}
		else if (($result1['tipoempleado'] == '5')||($result1['tipoempleado'] == '6')){
			
			
			if ($result1['tipoempleado'] == '5')
				$tipoE = "Enfermero(a) Circulante";
			else
				$tipoE = "Enfermero(a) Ayudante Anestesia";
				
				
					$turnoQ = mysql_query ("select T.nombreTurno from turno T, empleado P where P.cedulaEmpleado = '$cedulaE' AND P.idturno = T.idturno");
			$turnoE = mysql_fetch_assoc($turnoQ);
			
			$encabezado = '<table width="875" border="0">
    <tr class="aaaaa">
      <td width="76">Cedula</td>
      <td width="78">Nombre</td>
      <td width="78">Apellido</td>
      <td width="78">Telefono</td>
      <td width="79">Direccion</td>
      <td width="85">Fecha de Nacimiento</td>
      <td width="37">Tipo Empleado</td>
      <td width="84">Turno</td>
	  <td width="84">Sueldo</td>
    </tr>
	<tr bgcolor="#A2C2F9">
      <td width="76">'.$result1['cedulaempleado'].'</td>
      <td width="78">'.$result1['nombreempleado'].'</td>
      <td width="78">'.$result1['apellidoempleado'].'</td>
      <td width="78">'.$result1['telefonoempleado'].'</td>
      <td width="79">'.$result1['direccionempleado'].'</td>
      <td width="85">'.$result1['fechanempleado'].'</td>
	  <td width="37">'.$tipoE.'</td>
      <td width="37">'.$turnoE['nombreturno'].'</td>
	  <td width="37">'.$result1['sueldoempleado'].'</td>
	  <td width="10" bgcolor="#FFFFFF"><a href="modificarEmpleado.php?deleteid='.$result1['cedulaempleado'].'"><img src="../IMAGENES/editarp.jpg" width="20" height="20"></a></td>
    </tr></table>';
			
		
			
		}
		else if (($result1['tipoempleado'] == '4')||($result1['tipoempleado'] == '7')){
			
			if ($result1['tipoempleado'] == '4')
				$tipoE = "Anestesiologo";
			else
				$tipoE = "Enfermero(a) Instrumentista";
			
			$encabezado = '<table width="875" border="0">
    <tr class="aaaaa">
      <td width="76">Cedula</td>
      <td width="78">Nombre</td>
      <td width="78">Apellido</td>
      <td width="78">Telefono</td>
      <td width="79">Direccion</td>
      <td width="85">Fecha de Nacimiento</td>
      <td width="37">Tipo Empleado</td>
      <td width="84">Turno</td>
	</tr>
	<tr bgcolor="#A2C2F9">
      <td width="76">'.$result1['cedulaempleado'].'</td>
      <td width="78">'.$result1['nombreempleado'].'</td>
      <td width="78">'.$result1['apellidoempleado'].'</td>
      <td width="78">'.$result1['telefonoempleado'].'</td>
      <td width="79">'.$result1['direccionempleado'].'</td>
      <td width="85">'.$result1['fechanempleado'].'</td>
	  <td width="37">'.$tipoE.'</td>
      <td width="37">'.$turnoE['nombreturno'].'</td>
	  <td width="10" bgcolor="#FFFFFF"><a href="modificarEmpleado.php?deleteid='.$result1['cedulaempleado'].'"><img src="../IMAGENES/editarp.jpg" width="20" height="20"></a></td>
	  
    </tr></table>';
	
			$turnoQ = mysql_query ("select T.nombreTurno from turno T, empleado P where P.cedulaEmpleado = '$cedulaE' AND P.idturno = T.idturno");
			$turnoE = mysql_fetch_assoc($turnoQ);
	
		}
		
	}
	echo $encabezado;
	

?>
