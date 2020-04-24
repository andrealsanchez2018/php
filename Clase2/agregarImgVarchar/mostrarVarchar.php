<?php

require('conexion.php'); # solicitamos la conexió a la DB

$sql = "SELECT * FROM imagenes_varchar"; #guardamos en una variable la sentencia sql de la consulta

$resultado = mysqli_query($conexion, $sql);# o se puede escribir asi $resultado = $conexion->query($sql); esta es mas rapida

$resultado_varchar = mysqli_fetch_all($resultado);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Imagen Varchar</title>
</head>
<body>
<form method="POST" action="agregarImg_Varchar.php" enctype="multipart/form-data">
    <input type="text" name="nombreImg"/>
    <input type="file" name="imagen"/>
    <button type="submit">Agregar</button>
    </form>

    

    <?php foreach($resultado_varchar as $datoVar): ?>
    <div> 
        <?php echo $datoVar[1]; ?>
        <img src="<?php echo $datoVar[2]; ?>" />
    <!-- para eliminar: -->
    <a href="eliminar.php?id=<?php echo $datoVar[0]; ?>">Eliminar</a> 

     </div>
    <!-- para Actualizar: -->
    <div>
     <form method="POST" action="updateImg_Varchar.php" enctype="multipart/form-data">
    <input type="text" name="updateImg"/>
    <input type="file" name="imagenUp"/>
    <input type="hidden" name ="id" value="<?php echo $datoVar[0] ?>"/>
    <button type="submit">Actualizar</button>
    </form>
    </div>

    <?php endforeach; ?>
    </body>
</html>