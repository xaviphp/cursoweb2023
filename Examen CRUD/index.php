<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="añadir_usuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>