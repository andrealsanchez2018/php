<?php

require('conexion.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "UPDATE contactos SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono=$telefono, email='$email' WHERE id=$id";
mysqli_query($conexion, $sql);

header('Location: showData.php');
?>