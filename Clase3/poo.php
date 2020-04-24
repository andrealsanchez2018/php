<?php

class Persona {
    //Declarar las variables que utilizará la clase
    public $nombre;
    public $apellido;
    public $edad;

    //Declaración e inicialización de l constructor
    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre; # de esta forma a partir del $this->
        $this->apellido = $apellido;
        $this->edad = $edad;

    }

    //método
    public function saludar(){
    echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años";
    }
}
$persona = new Persona('Kamilo', 'Munevar', 28); #instancia del objeto persona
$persona->saludar(); # accedemos desde la instancia del objeto a la ejecución de un metodo