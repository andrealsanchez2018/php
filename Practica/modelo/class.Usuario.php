<?php

//La clase Conexion es una extension de la clase mysqli
// ya que necesitamos que la clase Conexio herede los métodos y atributos
class Conexion extends mysqli{

    //Declaramos las variables
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'fullstack';

  //Declaración del constructor de la clase Conexion
  public function __construct()  {
    //Heredamos  el constructor de la clase Padre mysqli
    parent:: __construct(); #así heredamos el contructor Padre de mysqli "ese es el mismo super"

  }

}
?>