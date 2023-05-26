<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Ejercicio Formulario Contacto</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="12.estilos.css">
</head>

<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
			<!--aqui cambiamos de get a post-->
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre))
				echo $nombre ?>">
				<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo))
				echo $correo ?>">
				<input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono:" value="<?php if (!$enviado && isset($telefono))
				echo $telefono ?>">
				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if (!$enviado && isset($mensaje))
				echo $mensaje ?></textarea>
			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif ($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif ?>
			<br>
			<label for="aceptar-terminos">
				<input type="checkbox" id="aceptar-terminos" name="aceptar-terminos" required>
				Acepto los términos y condiciones
			</label>
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
			<br>
			<br>
			<br>
			<br>


			<input type="submit" name="submit2" class="btn btn-primary" value="Enviar Correo">

		</form>
	</div>
</body>

</html>