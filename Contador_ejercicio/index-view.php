<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">
		<p class="numero"><?php echo $fila['numero_actual']; ?></p>
		<p class="texto"><?php if($fila['numero_actual']==1){echo"Visita";}else{
			echo"Visitas";}?></p>
	</div>
</body>
</html>