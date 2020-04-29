<?php

/* 
Declarar la clase Usuarui, con su repectivo constructor y sus métodos
de iniciar sesión, registro, actualizar datos y demas
*/

require(__DIR__ . '/../config/class.Conexion.php');#raiz del doc ppal y apartir de ahi se desplace a esa ruta que queremos #requiereOnce / include / includeOnce

class Usuario{
    public function __construct(){

    }

    // creamos el metodo agregarUsuario que recibirá los parámetroscuando al usamos la instancia del objeto usuario
    // le enviamos los datos del formulario
    public function agregarUsuario($nombre, $apellido, $email, $pass){
        $db = new Conexion(); # realizamos la instancia del objeto conexion
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$email', '$pass')";

        #resultado = mysqli_query($conexion, $sql) es igual a:
        $db->query($sql) ? header('Location: ../index.php?res=registrado') : header('Location: ../index.php?res=error');#si el primer (Parte True)header tiene error opera el segundo (ParteFalse)header

    }

}


?>