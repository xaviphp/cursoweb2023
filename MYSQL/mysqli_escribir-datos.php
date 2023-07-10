<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "INSERT INTO usuarios(id, nombre, email) VALUES(null, 'Daniel', 'daniel@yahoo.es')";

}