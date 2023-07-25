<?php
session_start();

// Verifica si se ha enviado un formulario y si el ID de la usuario está presente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_usuario"])) {
    // Obtén el ID de la usuario desde el formulario
    $id_usuario = $_POST["id_usuario"];

    $conexion = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
    $sql = "DELETE FROM usuario WHERE id = $id_usuario";

    // Ejecuta la consulta
    if ($conexion->query($sql)) {
        // La usuario se eliminó correctamente
        // Aquí puedes redirigir al usuario de nuevo a la página de lista de usuarios u otra página relevante
        header("Location: leer_usuario.php");
    }

}
?>