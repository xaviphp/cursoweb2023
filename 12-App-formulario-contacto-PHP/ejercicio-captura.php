<?php
$nombre=$_GET['nombre'];
$nombre= trim($nombre); //quita espacios
$nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
$nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código

$correo=$_GET['correo'];
$correo=filter_var($correo, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo

$telefono=$_GET['telefono'];

$mensaje=$_GET['mensaje'];
$mensaje= trim($mensaje); //quita espacios
$mensaje=htmlspecialchars($mensaje); //Nos convierte los caracteres especiales en entidades html
$mensaje=stripslashes($mensaje); // Nos quita \ diagonales para no inyectar código

$telefono=$_GET['telefono'];

echo"<br>Tu nombre es " . $nombre . ", tu correo es " . $correo . ", tu numero de telefono es el " . $telefono . " y has escrito " . $mensaje . $telefono;
?>
