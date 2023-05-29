
<?php

session_start();

echo $_SESSION['usuario'];
echo "<br>";
echo $_SESSION['usuario2'];
echo "<br>";

if($_SESSION['usuario']===$_SESSION['usuario2']){
    echo"Bienvenido" . $_SESSION['usuario2'];
} else{
    echo"Usuario incorrecto";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Comprovación de usuario</title>
</head>
<body>
    <a href="ejercicio1parte2.php"><button>Comprobar de nuevo</button></a>
</body>
</html>