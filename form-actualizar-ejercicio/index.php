<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$campo = $_POST['campo'];
		$nombre = $_POST['nombre'];

		//Error si no hay "id" seleccionada
		if (empty($id)) {
			$errores .= 'Por favor selecciona una id <br />';
		}

		//Sanear el campo "nombre"
		if (!empty($nombre)) {
			$nombre = trim($nombre);
		} else {
			$errores .= 'Por favor escribe un nombre <br />';
		}

		if(!$errores){
			$enviado = 'true';
		}

	}

	require 'index.view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

			//Actualizar datos del formulario
			// $statement = $conexion->prepare('UPDATE usuarios_form SET $campo=:nombre WHERE  id=:id');
			// $statement->execute(
			// 	array(':id'=> $id,':nombre'=> $nombre)
			// );
			$sql = "UPDATE productos SET $campo = :nombre WHERE CÓDIGOARTÍCULO = :id";
		$statement = $conexion->prepare($sql);
		$statement->execute(array(':id' => $id, ':nombre' => $nombre));

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}


?>