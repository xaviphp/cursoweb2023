<?php
session_start();

$usuario= $_SESSION['usuario'];
echo $usuario;

if (isset($_POST['usuario2'])) {
    $_SESSION['usuario2']=$_POST['usuario2'];
    // Redireccionar a la página de comprobación
    header("Location: ejercicio1parte3.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Ejercicio Session</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="12.estilos.css">
</head>

<body>
    <h1>Ejercicio session</h1>
	<div class="wrap">
        <p>Introduce de nuevo el usuario:</p>
		<form action="" method="post">
			<!--aqui cambiamos de get a post-->
			<input type="text" class="form-control" id="usuario2" name="usuario2" placeholder="usuario:" value="">
			<input type="submit" name="submit" class="btn btn-primary" value="Iniciar sesión Usuario">

		</form>
	</div>
</body>

</html>
<?php




?>
