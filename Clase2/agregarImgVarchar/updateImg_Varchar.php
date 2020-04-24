
<?php

    require('conexion.php');  #el metodo require es propio php

    $updateImg = $_POST['updateImg'];
    $updateId = $_POST['id'];

    $carpeta = "files/";
    opendir($carpeta); # abrimos la carpeta donde queremos guradar los archivos
    $destino = $carpeta .$_FILES['imagenUp']['name']; # capturamos la img /files/imagen.png
    move_uploaded_file($_FILES['imagenUp']['tmp_name'],$destino);


    /* 
    $_FILES[
        ['clave' => 'valor'],
        []
    ] -> Arreglo asociativo 
    
    ['Imagen']['name']
    */
    $id = $_POST['updateImg'];
    $sql = "UPDATE imagenes_varchar SET nombre='$updateImg' ,imagen='$destino' WHERE id='$updateId'";
    mysqli_query($conexion, $sql); #abrimos la conexión y ejecutamos la sentencia sql

    header('Location: mostrarVarchar.php');#redirigimos a la vista  mostrarVarchar.php
    ?>