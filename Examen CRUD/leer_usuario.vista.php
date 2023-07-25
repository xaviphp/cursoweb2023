<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis Usuarios</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo_lista_tareas.css">
</head>
<body>

<div>
	<div class="container">
		<div class="header">
			<h1>Mis usuarios</h1>
		</div>
		<div class="notes">
			<!-- Mostrar las tareas agrupadas por fecha -->
					<?php foreach ($resultadosconsulta as $resultadoconsulta): 
echo $resultadoconsulta['id'] ?><?php echo $resultadoconsulta['nom']?><?php echo $resultadoconsulta['email']?></a></h3>
                        <form action="eliminar_usuario.php" method="post">
						<input type="hidden" name="id_usuario" value="<?php echo $resultadoconsulta['id'] ?>">
						<input class="delete-boton" type="submit" name="submit" value="Eliminar usuario">
					</form>
				</div>
			<?php endforeach; ?>
	
		</div>
		<a class="button-volver" href="index.php">Volver</a>
	</div>
</div>
</body>
</html>
