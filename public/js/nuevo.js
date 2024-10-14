$("#btnValidar").click(function(){
	/*alert("Validando");*/
	var nombre    = document.querySelector("#nombre");
	var apellidos = document.querySelector("#apellidos");
	var sexo      = document.querySelector("#sexo");
	var telefono  = document.querySelector("#telefono");
	var dni       = document.querySelector("#dni");
	var fecha_nac = document.querySelector("#fecha_nac");
	var foto      = document.querySelector("#foto");
	var direccion = document.querySelector("#direccion");
	var email     = document.querySelector("#email");
	var passwd1   = document.querySelector("#passwd1");
	var passwd2   = document.querySelector("#passwd2");

	if(nombre.value == ""){
		alert("Nombre vacio");
		nombre.style.background = 'yellow';
	}else{
		if(apellidos.value == ""){
			alert("Apellidos vacio");
			apellidos.style.background = 'yellow';
		}else{

			if(dni.value == ""){
					alert("DNI vacio");
					dni.style.background = 'yellow';
			}else{

				if(email.value == ""){
						alert("email vacio");
						email.style.background = 'yellow';
				}else{

					if(passwd1.value == "" || passwd2.value == ""){
							alert("Contraseñas vacias");
							passwd1.style.background = 'yellow';
					}else{

						if(passwd1.value == passwd2.value){
							if(passwd1.value.length < 8){
								alert("La constraseña debe tener minimo 8 caracteres");
							}else{
								$("#btnValidar").css({
									display: 'none'
								});
								$("#btnGuardar").css({
									display: 'block'
								});
							}
						}else{
							alert("Las contraseñas no coinciden");
						}
					}

				}

			}
		}
	}

});