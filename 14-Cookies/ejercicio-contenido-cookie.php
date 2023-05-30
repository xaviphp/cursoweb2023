<?php 

if (isset($_COOKIE['tamanyo'])) {
	$tamanyo = $_COOKIE['tamanyo'];
	$tamanyoh1 =$tamanyo * 2;
} 
if (isset($_COOKIE['color'])) {
	$color = $_COOKIE['color'];
} 
if (isset($_COOKIE['background-color'])) {
	$backgroundcolor = $_COOKIE['background-color'];
} 

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Texto de prueba cookie</title>
	<style>
		p {
			font-size: <?php echo $tamanyo . "px"; ?>;
			color: <?php echo $color; ?>;
			
			

		}
		h1{
			font-size: <?php echo $tamanyoh1 . "px"; ?>;
		}
		body{background-color: <?php echo $backgroundcolor; ?>;

		}
	</style>
</head>
<body>
	<h1>Ejercicio-contenido-cookie</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<a href="ejercicio-tema-cookie.php">Volver a introducir valores</a>
</body>
</html>