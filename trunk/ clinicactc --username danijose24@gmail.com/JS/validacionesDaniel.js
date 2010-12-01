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