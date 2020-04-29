<?php
/* comentarios */

require(__DIR__ . '/../modelo/class.Usuario.php'); #requerimos el archivo de la clase usuarioControl

$accion = $_GET['accion'];

switch ($accion) {
    case 'registrar':
        insertar();
        break;
    
}

function insertar(){
    $usuario = new Usuario(); #instanciamos la clase usuario

    //Traemos los datos del formulario

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $pass = $_POST['contrasena'];
   /*  print_r($usuario); */

    $usuario->agregarUsuario($nombre,  $apellido, $email, $pass);
}


?>