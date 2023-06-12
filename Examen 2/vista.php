<!DOCTYPE html>
<html lang="ca">
    <title>Formulari de Contacte</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="email" name="correu" placeholder="correu">
        <input type="submit" name="submit" value="enviar correu">
        <?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php
            echo 'Tu nombre es ' . $nombre . '<br>';
            echo 'Tu correo es ' . $email . '<br>';
             endif ?>
    </form>
</body>
</html>