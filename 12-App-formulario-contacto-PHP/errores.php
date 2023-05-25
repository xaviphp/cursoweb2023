<?php 

$errores = '';
$enviado = '';

if (isset($_GET['submit'])||isset($_GET['submit2'])) {
	$nombre = $_GET['nombre'];
    $telefono = $_GET['telefono'];
	$correo = $_GET['correo'];
	$mensaje = $_GET['mensaje'];

	if (!empty($nombre)) {

	} else {
        
		$errores .= 'Por favor escribe un nombre <br />';
	}

    if (!empty($telefono)) {

	} else {
        
		$errores .= 'Por favor escribe un telefono <br />';
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

if (isset($_POST['submit']) ||isset($_POST['submit2'])) {
	$nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {

	} else {
		$errores .= 'Por favor escribe un nombre <br />';
	}
    
    if (!empty($telefono)) {

	} else {
        
		$errores .= 'Por favor escribe un telefono <br />';
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