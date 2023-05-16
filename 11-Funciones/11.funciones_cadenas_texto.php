<?php 

$texto = 'Adeu Andreu';

// echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar código fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar código <b>Hola</b> o peor aun, código Javascript que se pueda ejecutar
// echo trim($texto); //Quita los espacios al principio y al final
// echo strlen($texto); //Cuenta los caracteres totales del string
// echo substr($texto, 5, 4); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
// echo strtoupper($texto); //Convierte a mayúsculas
// echo strtolower($texto); //Convierte a minúsculas
// echo strpos($texto, 'n'); //Posición del string
// echo strrev($texto);  //Invierte el texto
// $nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
// echo $nuevoTexto;

//modo con funciones
// echo $palabra = "Amor Roma ";
// $palabra = trim($palabra);
// $palabra = strtolower($palabra);
// $palabra = str_replace(" ", "", $palabra);
// $palabraRev = strrev($palabra);

// if ($palabra == $palabraRev) {
//     echo "<br> es un palíndromo";
// } else {
//     echo "<br> NO es un palíndromo";
// }

//modo pro
$palabra="amor a roma";
$nuevapalabra="";
$j=0;
$total= strlen($palabra);
for($i=$total-1; $i>=0; $i--){
    $nuevapalabra[$i] = $palabra[$j];
    echo"$palabra[$i]<br>";
    $j++;
}

if($nuevapalabra == $palabra){
    echo"la palabra $palabra es palindromo<br>";
}else {
    echo"la palabra $palabra no es palindromo<br>";
}

#2. Escribe un programa que dado dos strings compruebe si los dos primeros caracteres y los dos últimos son iguales.

//Dos strings
$texto1 = "asdasszs";
$texto2 ="dsfdds ds ddsdss";

//Los valores de principio y final del primer string
echo $dosprimerosTexto1 = substr($texto1, 0, 1);
echo $dosfinalesTexto1 = substr($texto1, -1);

echo "=";

//Los valores de principio y final del segundo string
echo $dosprimerosTexto2 = substr($texto2, 0, 1);
echo $dosfinalesTexto2 = substr($texto2, -1);
echo "? <br>";

if ($dosprimerosTexto1 == $dosprimerosTexto2 && $dosfinalesTexto1 == $dosfinalesTexto2) {
    echo "Los dos strings empiezan y acaban igual";
} elseif ($dosprimerosTexto1 != $dosprimerosTexto2 && $dosfinalesTexto1 == $dosfinalesTexto2){
    echo "Los dos strings no empiezan igual pero si acaban igual";
} elseif ($dosprimerosTexto1 == $dosprimerosTexto2 && $dosfinalesTexto1 != $dosfinalesTexto2){
    echo "Los dos strings empiezan igual pero no acaban igual";
} else {
    echo "Los dos strings ni empiezan ni acaban igual";
}

?>