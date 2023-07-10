<?php 
try {
	
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
	echo "Conexion correcta";

 
    $statement = $conexion->prepare('SELECT *
    FROM clientes WHERE
    CÓDIGOCLIENTE= :cc'); 
    $statement->execute(
            array(':cc'=> 'CT03')
    );

    $resultados = $statement->fetch(); 
    print_r($resultados); 

    

} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}

?>