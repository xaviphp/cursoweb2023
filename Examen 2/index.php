<?php
$enviado = '';
$errores='';






if (isset($_POST['submit'])) {
    $nombre=$_POST['nom'];
    $email=$_POST['correu'];

    // echo 'Tu nombre es ' . $nombre . '<br>';
    // echo 'Tu correo es ' . $email . '<br>';
    // Hasta aqui el usuario podria inyectar código <strong>Marc</strong>
    // Incluso podrian estar vacios los campos
    // Para validar los datos correctos debemos limpiar el código que recibimos

    if (!empty($nombre)) {
        $nombre= trim($nombre); //quita espacios
        $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
        $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código

        //OBSOLETO
        // $nombre=filter_var($nombre, FILTER_SANITIZE_STRING); //Filtros de "saneamiento" retira caracteres que no queremos

        echo 'Tu nombre es ' . $nombre . '<br>';
    } else {
        $errores .= 'Por favor escribe un nombre <br>';
        //$errores = $errores . " más texto concatenado";
    }
    // Formato de email  nombre@dominio.extension a@a.a
    if (!empty($email)) {
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de "validación" del correo
            $errores .= 'Por favor escribe un correo válido <br>';
        } else {
            echo 'Tu correo es ' . $email . '<br>';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br>';
    }
    if(!$errores){
		$enviado = 'true';
	}
}
require 'vista.php';
?>