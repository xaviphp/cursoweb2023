<?php

// while (true) {
//     $fechaactual = time();
//     $horaactual = date("H:i:s", $fechaactual);
//     echo $horaactual;
//     flush();
//     sleep(1);
// }

session_start();

if (isset($_POST['fecha'])) {
    $_SESSION['fecha'] = $_POST['fecha'];
    $fechaintroducida = $_SESSION['fecha'];
    $fechaactual = time();
    $fecha = date("d-m-Y", $fechaactual);
    echo "Hoy es $fecha<br>";
    echo "La fecha introducida es " . $fechaintroducida . "<br>";
    $marca1 = strtotime($fecha); //fecha en segundos desde 1970 hasta la escrita
    $marca2 = strtotime($fechaintroducida);

    $marca2 = strtotime($fechaintroducida);
    if ($marca1 > $marca2) {
        echo "La fecha que has introducida es anterior a la actual<br>";
        $dia = $marca1 / 86400 - $marca2 / 86400;
        echo "Han pasado $dia dias";
    } elseif ($marca2 > $marca1) {
        echo "La fecha que has introducida es posterior a la actual<br>";
        $dia = $marca2 / 86400 - $marca1 / 86400;
        echo "Faltan $dia dias";
    } else {
        echo "Has introducido la misma fecha";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio fecha</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="12.estilos.css">
</head>

<body>
    <h1>Ejercicio fecha</h1>
    <div class="wrap">
        <p>Introduce una fecha con el siguiente formato: dia-mes-año</p>
        <form action="" method="post">
            <!--aqui cambiamos de get a post-->
            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Introduce una fecha:" value="" required>
            <input type="submit" name="submit" class="btn btn-primary" value="enviar fecha">

        </form>
    </div>
</body>

</html>
<?php
?>