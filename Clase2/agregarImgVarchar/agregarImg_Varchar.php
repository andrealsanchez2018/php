<!-- Agregar datos e imagenes -->

<?php

    require('conexion.php');  #el metodo require es propio php

    $nombreImg = $_POST['nombreImg'];

    $carpeta = "files/";
    opendir($carpeta); # abrimos la carpeta donde queremos guradar los archivos
    $destino = $carpeta .$_FILES['imagen']['name']; # capturamos la img /files/imagen.png
    move_uploaded_file($_FILES['imagen']['tmp_name'],$destino);

    /* 
    $_FILES[
        ['clave' => 'valor'],
        []
    ] -> Arreglo asociativo 
    
    ['Imagen']['name']
    */

    $sql = "INSERT INTO imagenes_varchar (nombre, imagen) VALUES ('$nombreImg', '$destino')";
/* se simplificca por el tipo de dato , ya no hay que decodificar a base 64 porque el dato imagen ahota es varchar */
    mysqli_query($conexion, $sql); #abrimos la conexión y ejecutamos la sentencia sql

    header('Location: mostrarVarchar.php');#redirigimos a la vista  mostrarVarchar.php
    ?>