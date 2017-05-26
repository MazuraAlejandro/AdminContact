$("#login").click(function(event) {
	var user = $("#user").val();
	var pass = $("#pass").val();
	if (user != "" && pass != "") {
		var parametros = {"user":user,"pass":pass,"option":"login"};
		$.ajax({
			url: 'models/index.php',
			type: 'post',
			data: parametros,
		})
		.done(function(data) {
			console.log(data);
			if (data == 1) {
				window.location.href = "controllers/dashboard.php";
			}else{
				var $toastContent = $('<span>Credenciales incorrectas</span>');
  				Materialize.toast($toastContent, 2000);
			}
		})
		.fail(function(data_error) {
			console.log(data_error);
			var $toastContent = $('<span>Error al conectarse</span>');
  			Materialize.toast($toastContent, 2000);
		});
		

	}else{
		var $toastContent = $('<span>Usuario o Contraseña Vacios</span>');
  		Materialize.toast($toastContent, 2000);
	}
});