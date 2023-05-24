
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
		<form action="ejercicio-captura.php" method="get">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="" required>

			<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" value="" required>
			<input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono:" value="" required>
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea required>
            <label for="aceptar-terminos">
    <input type="checkbox" id="aceptar-terminos" name="aceptar-terminos" required>
    Acepto los términos y condiciones
  </label>
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>
	</div>
</body>
</html>