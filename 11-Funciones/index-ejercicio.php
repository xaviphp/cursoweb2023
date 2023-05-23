<?php 

function calcular_area_hexagono($lado, $apotema){
    $perimetro= $lado * 6;
    $area = ($perimetro * $apotema) / 2;
    return $area;
    }
$area_hexagono = calcular_area_hexagono(2,2.5);    

// include 'vista.php'; //Warning, cuando el archivo "incluido" no es importante
require 'vista.php'; //Falta error, cuando el archivo es indispensable, sino el resto de la página no deberia visualizarse


?>