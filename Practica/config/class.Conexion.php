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
    parent:: __construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME); #así heredamos el contructor Padre de mysqli "ese es el mismo super"
    $this->set_charset('utf-8'); #indicamos como se deben enviar los datos desde PHP

    //Declaramos la conexión
    $this->connect_errno ? die('Error en la conexion' . mysqli_connect_errno()) : $m = 'Conectado';#asi se simplifica un if y un else con ternarios
    // echo $m;
  }

}
?>