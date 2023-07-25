<?php
session_start();


try {
    $conexion = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}

    
    // Consulta SQL utilizando la variable $nombre_categoria
    $statementconsulta = $conexion->query("SELECT id, nom, email FROM usuario");
    $resultadosconsulta = $statementconsulta->fetchAll();


require './leer_usuario.vista.php';