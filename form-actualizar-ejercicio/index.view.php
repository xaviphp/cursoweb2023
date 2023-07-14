<?php
require 'consulta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar registros</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<p>Selecciona el id a actualizar</p>
			<select name="id" id="id" class="form-control">
				<option value=""></option>
				<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
                    <option><?php echo $resultadoconsulta['CÓDIGOARTÍCULO']; ?></option>
                <?php endforeach; ?>
			</select>
			<p>Selecciona el campo a actualizar</p>
			<select name="campo" id="campo" class="form-control">
				<option value=""></option>
				<?php foreach ($resultadosconsulta2 as $resultadoconsulta2): ?>
                    <option><?php echo $resultadoconsulta2[0]; ?></option>
                <?php endforeach; ?>
			</select>
			
			<p>Escribe el nuevo valor</p>
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Actualizado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Actualizar registro">
		</form>
	</div>
	<div>
		<table>
			<tr>
				<th>CÓDIGOARTÍCULO</th>
				<th>SECCIÓN</th>
				<th>NOMBREARTÍCULO</th>
				<th>PRECIO</th>
			</tr>
			<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
                    <tr><td><?php echo $resultadoconsulta['CÓDIGOARTÍCULO']?></td> 
					<td><?php echo $resultadoconsulta['SECCIÓN']?></td>
					<td><?php echo $resultadoconsulta['NOMBREARTÍCULO']?></td>
					<td><?php echo $resultadoconsulta['PRECIO']; ?></td></tr>
                <?php endforeach; ?>
		</table>
	
	</div>
</body>
</html>
<style>
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>