<?php

require('conexion.php'); #traemos la conexión a la DB.

// solicitar las variables
                #dato     #variable
$img = $_FILES['imagen']['name']; #traemos la imagen $_FILES['valorAtrutoName']['AtributoName']
$temp = $_FILES['imagen']['tmp_name']; #traemos la ubicación de la imagen en la carpeta temporal de PHP
$carpeta = 'files'; #carpeta donde se guardará la img en nuestro proyecto

//mover el archvo de la carpeta temporal de PHP a la carpeta de nuestro proyecto
// move_uploaded_file('carpetaTemporal', 'carpetaDondeSeMoverá')
move_uploaded_file($temp, $carpeta.'/'.$img);

// BLOB en DB, debemos extraer el peso del archivo en bytes
$bytes = file_get_contents($carpeta.'/'.$img); #120 KB

// guardar nombre de la img
$nombreImg = $_POST['nombreImg'];

//realizar la inserción de los datos a nuestra tabla
$sql = "INSERT INTO imagenes_blob (nombre, imagen) VALUES (?,?)"; # SENTENCIA SQL
$stm = $conexion -> prepare($sql); # abriendo la conexión para la inserción de datos
$stm->bind_param('ss', $nombreImg, $bytes);
$stm->execute();

//indicamos a que archivo nos debe redirigir una vez hecho el registro
header('Location: mostrar.php');

?>