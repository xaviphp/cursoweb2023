<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "ALTER TABLE usuarios DROP edad";
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	}
}