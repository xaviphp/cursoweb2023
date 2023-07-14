<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


			//Buscar datos del formulario "READ" SQL
			$statementconsulta = $conexion->query('SELECT CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO FROM productos
            LIMIT 5');
            
			// $statement->execute();
			//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
			$resultadosconsulta = $statementconsulta->fetchAll();
			//Como mostramos los datos
            $st =  $conexion->query('SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME = "PRODUCTOS"
            LIMIT 3 OFFSET 1');
            //print_r($st);

            $resultadosconsulta2 = $st->fetchAll();
            ?>