<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {

	} else {
		$errores .= 'Por favor escribe un nombre <br />';
	}

	if (!empty($correo)) {

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor escribe un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor escribe un correo <br />';
	}

	if(!empty($mensaje)){

	} else {
		$errores .= 'Por favor escribe el mensaje <br />';
	}

	if(!$errores){
		$enviado = 'true';
	}

}


?>