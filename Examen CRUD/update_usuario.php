<?php 


	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];

	

		try {
			$conexion = new PDO('mysql:host=localhost;dbname=examen', 'root', '');

			//Actualizar datos del formulario
			$statement = $conexion->prepare('UPDATE usuario SET nom=:nombre WHERE  id=:id');
			$statement->execute(
				array(':id'=> $id,':nombre'=> $nombre)
			);

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
    }
	


    require './update_usuario.vista.php';
    ?>


