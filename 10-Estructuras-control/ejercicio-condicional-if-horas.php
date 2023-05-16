<?php
$hora = 24;
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio condicional</title>
	</head>
	<body>
        <?php
        if ($hora < 13) {
            ?>
            <h1>Buenas Dias</h1>
            <?php
           
        }
        else {
            ?>
            <h1>Buenas tardes</h1>
            <?php
        }
        ?>
	</body>
	</html>