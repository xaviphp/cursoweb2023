<?php
session_start();
// $_POST['usuario'] = "";

if (isset($_POST['tamanyo']) && ($_POST['color']) && ($_POST['background-color'])) {
    $_SESSION['tamanyo'] = $_POST['tamanyo'];
    $_SESSION['color'] = $_POST['color'];
    $_SESSION['background-color'] = $_POST['background-color'];
    setcookie('tamanyo', $_SESSION['tamanyo'], time() + 60 * 60 * 24 * 30, '/');
    setcookie('color', $_SESSION['color'], time() + 60 * 60 * 24 * 30, '/');
    setcookie('background-color', $_SESSION['background-color'], time() + 60 * 60 * 24 * 30, '/');
    header("Location: ejercicio-contenido-cookie.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Ejercicio Cookies</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="12.estilos.css">
</head>

<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h1>Ejercicio-tema-cookie</h1>
        <h2>Introducir valores en ingles</h2>
			<!--aqui cambiamos de get a post-->
			<input type="number" class="form-control" id="tamanyo" name="tamanyo" placeholder="Tamaño texto" value="">
			<input type="text" class="form-control" id="color" name="color" placeholder="Color texto" value="">
            <input type="text" class="form-control" id="background-color" name="background-color" placeholder="Color fondo" value="">
			<br>


			<input type="submit" name="submit2" class="btn btn-primary" value="Enviar">

		</form>
	</div>
</body>

</html>