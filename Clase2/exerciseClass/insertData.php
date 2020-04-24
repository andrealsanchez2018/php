<?php
require('conexion.php');

/* $id = $_POST['id']; */
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];


$sql ="INSERT INTO contactos (nombre, apellido, direccion, telefono, email) VALUES ( '$nombre', '$apellido', '$direccion', '$telefono', '$email')";
 

/* $sql = "INSERT INTO contactos (id, nombre, apellido, direccion, telefono, email) VALUES (?,?,?,?,?,?)"; # SENTENCIA SQL
$stm = $conexion -> prepare($sql); # abriendo la conexión para la inserción de datos
$stm->bind_param('sss', $id, $nombre, $apellido, $direccion, $telefono, $email);
$stm->execute(); */
mysqli_query($conexion, $sql);

header('Location: showData.php');
?>