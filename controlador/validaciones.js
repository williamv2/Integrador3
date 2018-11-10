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

$(document).ready(function(){
            $('#dashboard').click(function() {
                
                 $('#content-wrapper2').fadeOut(300) && $('#content-wrapper3').fadeOut(500) && $('#content-wrapper4').fadeOut(300) && $('#content-wrapper1').fadeIn(300);
            })
            $('#noticias').click(function() {
                
                 $('#content-wrapper1').fadeOut(300) && $('#content-wrapper3').fadeOut(300) && $('#content-wrapper4').fadeOut(300) && $('#content-wrapper2').fadeIn(300);
            })
            $('#eventos').click(function() {
                
                 $('#content-wrapper1').fadeOut(300) && $('#content-wrapper2').fadeOut(300)&& $('#content-wrapper4').fadeOut(300) && $('#content-wrapper3').fadeIn(300);
            })
            $('#convocatorias').click(function() {
                
                 $('#content-wrapper1').fadeOut(300) && $('#content-wrapper2').fadeOut(300) && $('#content-wrapper3').fadeOut(300) && $('#content-wrapper4').fadeIn(300) ;
            })
      })
