<?php 
// function contar_usuarios(){
// 	$archivo = 'contador.txt';

// 	if ( file_exists($archivo) ) {
// 		$cuenta = file_get_contents($archivo) + 1;
// 		file_put_contents($archivo, $cuenta);

// 		return $cuenta;
// 	} else {
// 		file_put_contents($archivo, 1);
// 		return 1;
// 	}
// }

$conexion = new mysqli('localhost', 'root', '', 'contador');

// Nos retorna un codigo de error o si todo esta bien regresa 0.
// echo $conexion->connect_errno;

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE contador SET numero_actual = numero_actual+1");
	// Ejecutamos la sentencia.
	$statement->execute();
	$sql = "SELECT * FROM contador";
	$resultado = $conexion->query($sql);
	foreach($resultado as $fila){
		echo $fila['numero_actual'];
	}



require 'index-view.php';
}

?>
