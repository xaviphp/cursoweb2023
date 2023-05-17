<?php
//Codi PHP
//5.A	Aquesta classe representa una impressora la qual te quatre atributs i una funció la qual verificant els atributs permet imprimir o no
//Les instruccions necesaries per a mostrar en color negre, seria afegir i concatenar la paraula $color dins de la funcio i despres cridar a la funcio passant-li els atributs com faig mes abaix.
//Si els atributs de la class impressora fossin private o protected es tindrien que fer els getters i setters corresponents:
    // Getters y Setters para los atributos protegidos
    /*
    public function getTinta() {
        return $this->tinta;
    }
    
    public function setTinta($tinta) {
        $this->tinta = $tinta;
    }
    
    public function getPaper() {
        return $this->paper;
    }
    
    public function setPaper($paper) {
        $this->paper = $paper;
    }
    
    public function getTamany() {
        return $this->tamany;
    }
    
    public function setTamany($tamany) {
        $this->tamany = $tamany;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
}
*/
//aixi podriem accedir als atributs desde fora la clase
class Impressora {
    //Atributs
    public $tinta = true;
    public $paper = true;
    public $tamany = 'DINA4';
    public $color= 'negre';
    
    //Metodes
    public function imprimeix($tinta,$paper,$tamany, $color){
        if($tinta && $paper){
            echo 'Es pot imprimir en ' . $tamany . ' en color ' . $color;
        }
        else {
            echo 'Falta tinta o paper';
        }
        
    
    }
    
    
    
}

$impresora = new Impressora(); //Creamos OBJETO
$impresora->imprimeix(true, true, 'DINA4', 'negre');


$semana = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];
sort($semana);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Impressió del cocument </title>
    </head>
    <body>
        <h1>Titular del document</h1>

        <!-- Codi PHP-->
        <UL>
            <?php
        foreach($semana as $dia){
				echo '<li>' . $dia . '</li>';
			}
            ?>
        </UL>
    </body>
</html>