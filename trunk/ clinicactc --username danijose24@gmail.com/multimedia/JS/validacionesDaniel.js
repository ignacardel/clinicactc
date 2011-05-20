function ValidarInput(){
	var usuario = $F('usuario');
	var password = $F('password');
	var boolean = true;
	
		
	if (!usuario){
		alert('Debe introducir una cedula');
		boolean = false;
	}
	else if (!/^([0-9])*$/.test(usuario)){

		alert("El valor (" + usuario + ") no es un numero");
		boolean = false;
			
	}
	
	else if (!password){
		alert('Debe introducir una contrasena');
		boolean = false;
	}
	
	else if (boolean == true){
		
		encriptar();

	}
	
	return boolean;

}

function encriptar(){
	
	var password = $F('password');
		
	
	var epassword = hex_md5(password);
	document.getElementById('epassword').value = epassword;
	
	
}

// 

function opcionesCrearTipoE(){
	
	var tipoE = $F('tipoE');
	

		if (tipoE == '1'){
			$('boton').update('<input type="submit" name="botonAceptar" id="botonAceptar" value="Aceptar" />');
			$('otipoE').update(' ');
			$('sueldo').update(' ');
		}
		 if ((tipoE == '2') || (tipoE == '3')){
			 $('otipoE').update('<img src="../IMAGENES/loading.gif" width="15" height="15" />');
		 $('otipoE').update('<td width="123">Honorarios Bsf.</td><td width="175"><input name="honorarioE" type="text" id="honorarioE" maxlength="8"/><span class="colorR" >*</span></td>');
			$('boton').update('<input type="submit" name="botonAceptar" id="botonAceptar" value="Aceptar" />');
		}
		 if ((tipoE == '4') || (tipoE == '7')){
			 $('otipoE').update('<img src="../IMAGENES/loading.gif" width="15" height="15" />');
			 new Ajax.Updater('otipoE','../php/ajax/CrearETurnos.php',{method: 'post',parameters: {}})
			 $('boton').update('<input type="submit" name="botonAceptar" id="botonAceptar" value="Aceptar" />');	
			 $('sueldo').update(' ');
		}
		 if ((tipoE == '5') || (tipoE == '6')){
			 new Ajax.Updater('otipoE','../php/ajax/CrearETurnos.php',{method: 'post',parameters: {}})
			  $('sueldo').update('<td width="123">Sueldo</td><td width="175"><input name="sueldoE" type="text" id="sueldoE" maxlength="8"/><span class="colorR" >*</span></td>');
			 $('boton').update('<input type="submit" name="botonAceptar" id="botonAceptar" value="Aceptar" />');
		}
		 if (tipoE == '0'){
			$('boton').update(' ');
			$('otipoE').update(' ');
		}
	

	
}

function validarCedula(){
var cedulaE = $F('cedulaE');

	
	if (!cedulaE){
		alert('Debe introducir una cedula');
		boolean = false;
	}
	else if (!/^([0-9])*$/.test(cedulaE)){

		alert("El valor (" + cedulaE + ") no es un numero");
		boolean = false;
		document.form1.cedulaE.value = null;
		$('valCel').update(' ');
		$('infoL').update('<div id="tipos"></div><p>&nbsp;</p><table width="308" border="0"><tr><div id="otipoE"></div><div id="sueldo"></div></tr></table><p>&nbsp;</p><table width="550" border="0"><tr><td width="498" align="center"><div id="boton"></div></td></tr></table>');
			
	}
	else if (cedulaE == '0'){
		$('valCel').update('<img src="../IMAGENES/error.png" width="15" height="15" />Numero de Cedula Ivalida');
		$('infoL').update('<div id="tipos"></div><p>&nbsp;</p><table width="308" border="0"><tr><div id="otipoE"></div><div id="sueldo"></div></tr></table><p>&nbsp;</p><table width="550" border="0"><tr><td width="498" align="center"><div id="boton"></div></td></tr></table>');
	}
	else{
	
	$('valCel').update('<img src="../IMAGENES/loading.gif" width="15" height="15" />');
	new Ajax.Updater('valCel','../php/ajax/validarCedula.php',{method: 'post',parameters: {phpCedulaE:cedulaE}})	
	new Ajax.Updater('tipos','../php/ajax/tipoE.php',{method: 'post',parameters: {phpCedulaE:cedulaE}})	
	new Ajax.Updater('infoL','../php/ajax/infoL.php',{method: 'post',parameters: {phpCedulaE:cedulaE}})	
	}


	
}


function horaturno(){
	
	var horaT = $F('horaT');
	if (horaT != 0){
	$('horas').update('<img src="../IMAGENES/loading.gif" width="15" height="15" />');
	new Ajax.Updater('horas','../php/ajax/CrearETurnos.php',{method: 'post',parameters: {phphoraT:horaT}})	
	}
	else
	$('horas').update(' ');
		
	

}



function ValidarCrearE(){
	
	var nombreE = $F('nombreE');
	var apellidoE = $F('apellidoE');
	var direccionE = $F('direccionE');
	var telefonoE = $F('telefonoE');
	var contrasenaE = $F('contrasenaE');
	var fechaNE = $F('fechanE');
	var boolean = true;
	var tipoE = $F('tipoE');
	var perfilE = $F('perfilE');
	
	
	if (!nombreE){
		alert('Debe introducir un nombre');
		boolean = false;
	}
	else if(/[0-9]/.test(nombreE)){
		alert('El nombre no puede contener numeros');
		boolean = false;
	}
	
	
	else if (!apellidoE){
		alert('Debe introducir un apellido');
		boolean = false;
	}
	else if(/[0-9]/.test(apellidoE)){
		alert('El apellido no puede contener numeros');
		boolean = false;
	}
	
	else if (!direccionE){
		alert('Debe introducir una direccion');
		boolean = false;
	}
	
	else if (!fechaNE){
		alert('Debe introducir una fecha de nacimiento');
		boolean = false;
	}
	
	
	else if (!telefonoE){
		alert('Debe introducir un telefono');
		boolean = false;
	}
	else if (!/^([0-9])*$/.test(telefonoE)){

		alert("El valor (" + telefonoE + ") no es un numero");
		boolean = false;
			
	}
	else if (telefonoE.length < '11'){

		alert("Debe introducir el telefono con codigo de area Ej: 02123456725");
		boolean = false;
			
	}
	
	else if (!contrasenaE){
		alert('Debe introducir una contrasena');
		boolean = false;
	}
	
	else if (perfilE == '0'){
		alert('Debe seleccionar un perfil');
		boolean = false;
	}
	
	
	
	else if ((tipoE == '2')||(tipoE == '3')){
		
		var honorarioE = $F('honorarioE');
	
		if (!honorarioE){
			alert('Debe introducir los honorarios (Bsf.)');
			boolean = false;
		}
		else if (!/^([0-9])*$/.test(honorarioE)){

			alert("El valor (" + honorarioE + ") no es un numero");
			boolean = false;
			
		}
	}
	else if ((tipoE == '5')||(tipoE == '6')){
		
		var turnoE = $F('horaT');
		var sueldoE = $F('sueldoE');
		
		
		
		if (turnoE == '0'){
			alert('Debe seleccionar el turno');
			boolean = false;
		}
		else if (!sueldoE){
			alert('Debe introducir el sueldo (Bsf.)');
			boolean = false;
		}
		else if (!/^([0-9])*$/.test(sueldoE)){

			alert("El valor (" + sueldoE + ") no es un numero");
			boolean = false;
			
		}		
		
	}
	
	else if ((tipoE == '4')||(tipoE == '7')){

		var turnoE = $F('horaT');
		
		if (turnoE == '0'){
			alert('Debe seleccionar el turno');
			boolean = false;
		}
	}
	
	if (boolean == true){
		
	var Econtrasena = hex_md5(contrasenaE);
	document.getElementById('contrasenaE').value = Econtrasena;	
	}
	
	return boolean;
}








function busquedaEmpleado(){

var cedulaE = $F('cedulaE');
var eliminarE = $F('eliminarE');
var modificarE = $F('modificarE');

	
	if (!cedulaE){
		alert('Debe introducir una cedula');
		boolean = false;
	}
	else if (!/^([0-9])*$/.test(cedulaE)){

		alert("El valor (" + cedulaE + ") no es un numero");
		boolean = false;
		document.form1.cedulaE.value = null;
		$('empleadoB').update(' ');
		
			
	}
	
	else{
		
		$('empleadoB').update('<img src="../IMAGENES/loading.gif" width="15" height="15" />');
		
		if ((eliminarE == '0') && (modificarE == '0'))
		new Ajax.Updater('empleadoB','../php/ajax/buscarEmpleado.php',{method: 'post',parameters: {phpCedulaE:cedulaE}})
		else if ((eliminarE == '1')&&(modificarE == '0')){
				
		new Ajax.Updater('empleadoB','../php/ajax/borrarEmpleado.php',{method: 'post',parameters: {phpCedulaE:cedulaE}})
		}
		else if ((modificarE == '1')&&(eliminarE == '0')){
		
		new Ajax.Updater('empleadoB','../php/ajax/editarEmpleado.php',{method: 'post',parameters: {phpCedulaE:cedulaE}})
		
		}
		
		
		
	}
}









function agregarComboT(i){
	var tratamientoE = $F('tratamientoE'+i);	

	
	if (tratamientoE != '0'){
		
		
		$('tratamientosP'+i).update('<img src="../IMAGENES/loading.gif" width="15" height="15" />');
		new Ajax.Updater('tratamientosP'+i,'../php/ajax/agregarComboT.php',{method: 'post',parameters: {phpI:i+1,phpTratamientoE:tratamientoE}})
		

	}
	else{
	$('tratamientosP'+i).update(' ');
	}
		
	
}



function agregarBoton(){

var tratamientoE = $F('tratamientoE');	
	
	if (tratamientoE != '0')
		$('boton').update('<input type="submit" name="botonAceptar" id="botonAceptar" value="Aceptar" />');		
	else
	$('boton').update(' ');		
	
}