<?php
//Ejercicio: Crea de la misma estructura, la superclase Vehiculo, y las subclases Coche, Avion y Barco. 
//Vehiculo tendrá al menos 1 atributo y 2 metodos específicos. 
//Después cada sbuclase Coche, Avion y Barco tendrán al menos 1 atributo y 1 método específico

// Definición de la superclase
class Vehiculo {
    protected $marca;
    public function __construct($marcaconstructor) {
        $this->marca = $marcaconstructor; //marca hace referencia  la variable $marca de arriba
      }

    public function getMarca() {
        return $this->marca;
      }
      public function motor() {
        echo $this->marca . " tiene motor combustible...\n";
      }  
}

class Coche extends Vehiculo {
    public function correr() {
        echo $this->marca . " esta corriendo...\n";
      }
}
class Avion extends Vehiculo {
    public function volar() {
        echo $this->marca . " esta volando...\n";
      }
}
class Barco extends Vehiculo {
    public function navegar() {
        echo $this->marca . " esta navegando...\n";
      }
}
$coche = new Coche("BMW");
$avion= new Avion("Boeing769");
$barco = new Barco("Falcon");

echo $coche->getMarca() . "\n";
$coche->motor();

echo $avion->getMarca() . "\n";
$avion->motor();

echo $barco->getMarca() . "\n";
$barco->motor();

$coche->correr();
$avion->volar();
$barco->navegar();