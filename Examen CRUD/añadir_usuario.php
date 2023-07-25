<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los valores del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  try {
    $conexion = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}

$sql = "INSERT INTO usuario (nom, email) VALUES ('$nombre', '$correo')";

//Revisar si la sentencia SQL es correcta
if ($conexion->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
} else {

}
}
require 'index.php';
?>