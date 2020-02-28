
function enviar(){

		alert("hola");
		var nombre = document.getElementById('Nombre').value;
		var asunto = document.getElementById('Subject').value;
		var correo = document.getElementById('EmailFrom').value;
		var tlf = document.getElementById('Telefono').value;
		 var mensaje = document.getElementById('Mensaje').value; 

		if(nombre==="" || nombre===null){
			alert("Todos los campos son obligatorios");
			return false

		}else{
			if (asunto==="" || asunto===null) {
				alert("todos los campos son obligatorios");
				return false;
			}else{
				if(correo==="" || correo===null){
					alert("todos los campos son obligatorios");
					return false;
				}else{
					if (tlf=="" || tlf==null) {
						alert("todos los campos son obligatorios");
						return false;
					}else{
							if (mensaje==="" || mensaje===null) {
								alert("debe completar todos los campos");
							}else{
								alert("bien");
								return true;
							}
						}
						}
					}
				}
			}



document.getElementById("contact-form").onsubmit = function(){
	enviar();


}