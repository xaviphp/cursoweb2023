<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


			//Buscar datos del formulario "READ" SQL
			$statementconsulta = $conexion->query('SELECT CÓDIGOCLIENTE, EMPRESA, DIRECCIÓN, POBLACIÓN, TELÉFONO, RESPONSABLE FROM clientes_copia
            LIMIT 5');
            $statementconsulta2 = $conexion->query('SELECT CÓDIGOCLIENTE FROM clientes_copia
            LIMIT 5');
			$resultadosconsulta = $statementconsulta->fetchAll();
            if (isset($_POST['codigo_cliente'])) {
            $codigo_cliente = $_POST['codigo_cliente'];
            $sql = "DELETE FROM clientes_copia WHERE CÓDIGOCLIENTE = '$codigo_cliente'";
            $conexion->query($sql);

    }

            
            ?>