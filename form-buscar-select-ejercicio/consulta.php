<?php
$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

			//Buscar datos del formulario "READ" SQL
			$statement = $conexion->query('SELECT CÓDIGOCLIENTE FROM clientes');
			// $statement->execute();
			//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
			$resultados = $statement->fetchAll();
			//Como mostramos los datos

            ?>