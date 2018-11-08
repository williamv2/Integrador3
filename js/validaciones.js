function validarlogin() {
	
	var usuario, contraseña, expresion;

	usuario = document.getElementById('username').value;
	contraseña = document.getElementById('pwd').value;

	expresion = /[^A-Za-z0-9]/;

	if(usuario === "" || contraseña === ""){

		alert("Debe ingresar un usuario y contraseña");
		return false;
	}
	else if (usuario.length>50 || contraseña.length>50) {

		alert("Nombre de usuario y contraseña no validos");
		return false;

	}
	else if (expresion.test(contraseña) || expresion.test(usuario)) {

		alert("Nombre de usuario y contraseña no validos");
		return false;
	}
}