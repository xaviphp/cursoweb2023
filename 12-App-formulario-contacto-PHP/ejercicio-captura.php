<?php
require 'errores.php';


if($_SERVER['REQUEST_METHOD']=='GET' && $enviado==true){
    echo"Estamos usando el metodo " . ($_SERVER['REQUEST_METHOD']) . "<br>";
    if($enviado==true){
        if(isset($_GET['submit'])){
            echo"Estamos usando el primer submit<br>";
        } else{
            echo"Estamos usando el segundo submit<br>";
        }
    }
    print_r($_GET);
    if($_GET){
        // print_r($_GET);
        $nombre=$_GET['nombre'];
        $nombre= trim($nombre); //quita espacios
        $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
        $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código

        $correo=$_GET['correo'];
        $correo=filter_var($correo, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo

        $telefono=$_GET['telefono'];

        $mensaje=$_GET['mensaje'];
        $mensaje= trim($mensaje); //quita espacios
        $mensaje=htmlspecialchars($mensaje); //Nos convierte los caracteres especiales en entidades html
        $mensaje=stripslashes($mensaje); // Nos quita \ diagonales para no inyectar código

        echo"<br>Tu nombre es " . $nombre . ", tu correo es " . $correo . ", tu numero de telefono es el " . $telefono . " y has escrito " . $mensaje;
        echo"<br>";
    }
} elseif($_SERVER['REQUEST_METHOD']=='POST' && $enviado==true){
        echo"Estamos usando el metodo " . ($_SERVER['REQUEST_METHOD']) . "<br>";
        if($enviado==true){
            if(isset($_POST['submit'])){
                echo"Estamos usando el primer submit<br>";
            }else{
                echo"Estamos usando el segundo submit<br>";
            }
        }
        print_r($_POST);
        if($_POST){
            $nombre=$_POST['nombre'];
            $nombre= trim($nombre); //quita espacios
            $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
            $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código

            $correo=$_POST['correo'];
            $correo=filter_var($correo, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo

            $telefono=$_POST['telefono'];

            $mensaje=$_POST['mensaje'];
            $mensaje= trim($mensaje); //quita espacios
            $mensaje=htmlspecialchars($mensaje); //Nos convierte los caracteres especiales en entidades html
            $mensaje=stripslashes($mensaje); // Nos quita \ diagonales para no inyectar código

            echo"<br>Tu nombre es " . $nombre . ", tu correo es " . $correo . ", tu numero de telefono es el " . $telefono . " y has escrito " . $mensaje;
            echo"<br>";
        }
}

require 'vista.php';
?>
