<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Marzo';

// switch($mes){
// 	case 'Diciembre':
// 		echo "Feliz Navidad!";
// 	break;

// 	case 'Enero':
// 		echo "Feliz Año Nuevo";
// 	break;

// 	default:
// 		echo "En este mes no se celebra nada";
// 	break;
// }
$dia = date('N');

switch($dia){
	case 1:
		echo "Feliz lunes";
	break;

	case 3:
		echo "Feliz miercoles";
	break;
	
	case 4:
		echo "Feliz jueves";
	break;
	default:
		echo "un dia cualquiera";
	break;
}

# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>