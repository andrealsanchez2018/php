<?php

/* Necesita conexión a la DB */

require('conexion.php');

$id = $_GET['id']; #capturamos el dato del id

// Sentencia a ejecutar que será el delete
$sql = "DELETE FROM imagenes_blob WHERE id='$id'";

mysqli_query($conexion, $sql);

header('Location: mostrar.php')
?>