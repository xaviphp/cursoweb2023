<?php

session_start();
// $_POST['usuario'] = "";

if (isset($_POST['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    // Redireccionar a la página de comprobación
    header("Location: ejercicio1parte2.php");
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
        <p>Introduce el nombre de usuario:</p>
        <form action="" method="post">
            <!--aqui cambiamos de get a post-->
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario:" value="">
            <input type="submit" name="submit" class="btn btn-primary" value="Registrar Usuario">

        </form>
    </div>
</body>

</html>