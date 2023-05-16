<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados<br>';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6

function calcular_area_hexagono($lado, $apotema){
$perimetro= $lado * 6;
$area = ($perimetro * $apotema) / 2;
return $area;
}
$area_hexagono = calcular_area_hexagono(2,2.5);

echo 'El hexagono tiene un area de ' . $area_hexagono . ' metros cuadrados';

//Función única "unida" y en "rumano" lmao
function calculArieHexagon($latura) {
    return (($latura * 6) * $latura / (2 * tan(deg2rad(30)))) / 2;
}
$latura = 30; //***Esta variable es la que se cambia
$aria = calculArieHexagon($latura);
echo "Aria hexagonului este: " . $aria . " cuando el lado es " . $latura;
?>