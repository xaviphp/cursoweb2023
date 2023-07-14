<?php
require 'consulta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar registro</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div>
		<table>
			<tr>
				<th>ELIMINAR</th>
				<th>CÓDIGOCLIENTE</th>
				<th>EMPRESA</th>
				<th>DIRECCIÓN</th>
				<th>POBLACIÓN</th>
				<th>TELÉFONO</th>
				<th>RESPONSABLE</th>
			</tr>
			<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
                    <tr>
					<td><form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="submit" name="codigo_cliente" value="<?php echo $resultadoconsulta['CÓDIGOCLIENTE']?>">
				</form></td>	
					<td><?php echo $resultadoconsulta['CÓDIGOCLIENTE']?></td> 
					<td><?php echo $resultadoconsulta['EMPRESA']?></td>
					<td><?php echo $resultadoconsulta['DIRECCIÓN']?></td>
					<td><?php echo $resultadoconsulta['POBLACIÓN']?></td>
					<td><?php echo $resultadoconsulta['TELÉFONO']?></td>
					<td><?php echo $resultadoconsulta['RESPONSABLE']; ?></td></tr>
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