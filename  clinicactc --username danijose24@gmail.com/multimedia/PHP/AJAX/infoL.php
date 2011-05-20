<?php


include "../../DB/conexion.php";

	$cedulaE = $_REQUEST['phpCedulaE'];
	
	$result = mysql_query("SELECT * from empleado where cedulaempleado = '$cedulaE'");
	if ($result1 = mysql_fetch_assoc($result)){
		echo '<div id="tipos"></div><p>&nbsp;</p><table width="308" border="0"><tr><div id="otipoE"></div><div id="sueldo"></div></tr></table><p>&nbsp;</p><table width="550" border="0"><tr><td width="498" align="center"><div id="boton"></div></td></tr></table>';
		
	}
	else{
		
	echo '<table width="312" border="0">
    <tr>
      <td width="95">Tipo Empleado</td>
      <td width="207">
        <select name="tipoE" id="tipoE" onchange="opcionesCrearTipoE()">
          <option value="0" {seleccione0}>Seleccione</option>
          <option value="1" {seleccione1}>Administrador</option>
          <option value="2" {seleccione2}>Cirujano</option>
          <option value="3" {seleccione3}>Ayudante de Cirujano</option>
          <option value="4" {seleccione4}>Anestesiologo</option>
          <option value="5" {seleccione5}>Ayudante de Anestesia</option>
          <option value="6" {seleccione6}>Enfermero(a) Circulante</option>
          <option value="7" {seleccione7}>Enfermero(a) Intrusmentista</option>
      </select></td>
    </tr>
   
  </table><p>&nbsp;</p><table width="308" border="0"><tr><div id="otipoE"></div><div id="sueldo"></div></tr></table><p>&nbsp;</p><table width="550" border="0"><tr><td width="498" align="center"><div id="boton"></div></td></tr></table>';
	}
	

?>
