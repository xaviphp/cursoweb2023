<?php
$variable1 = "";
$variable2 = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $variable1 = $_POST['variable1'];
    $variable2 = $_POST['variable2'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h1>Calculo del área del Hexágono</h1>
    <form method="POST">
        <input type="number" name="variable1" id="variable1"></input>
        <input type="number" name="variable2" id="variable2"></input>
        <button type="submit">calcular</button>
    </form>
    
	<p>El resultado del area del hexagono es: <?php 
    
    if($variable1 and $variable2 != null) {
        echo calcular_area_hexagono($variable1,$variable2); 
    }?></p>
</body>
</html>