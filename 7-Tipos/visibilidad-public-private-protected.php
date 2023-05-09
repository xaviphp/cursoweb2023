<?php

//VISIBILIDAD
/**
 * Definición de MyClass "Superclase"
 */
class MyClass {
    //3 atributos con modificadores de VISIBILIDAD
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    public function printHello(){
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass(); //Instanciamos $obj con la class MyClass()
echo $obj->public;    // Funciona bien
//echo $obj->protected; // Error Fatal
//echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definición de MyClass2 una "subclase"
 */
class MyClass2 extends MyClass {
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
    public $public = 'Public2';
    protected $protected = 'Protected2';
    private $otroatributo = "hola"; //Único de MyClass2
    

    function printHello(){
        echo $this->public;
        echo $this->protected;
        //echo $this->private;
        echo $this->otroatributo;
    }
}

$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
//echo $obj2->protected; // Error Fatal
//echo $obj2->private;   // Undefined
//echo $obj2->otroatributo;
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

?>