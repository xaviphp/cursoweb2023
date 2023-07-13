<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


			//Buscar datos del formulario "READ" SQL
			$statementconsulta = $conexion->query('SELECT CÓDIGOCLIENTE FROM clientes');
			// $statement->execute();
			//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
			$resultadosconsulta = $statementconsulta->fetchAll();
			//Como mostramos los datos

            ?>