<?php
/* 
    ]Ir a la DB, extraer los datos que necesitamos mostrar en el html
*/
require('conexion.php'); # solicitamos la conexió a la DB

$sql = "SELECT * FROM imagenes_blob"; #guardamos en una variable la sentencia sql de la consulta

$resultado = mysqli_query($conexion, $sql);# o se puede escribir asi $resultado = $conexion->query($sql); esta es mas rapida

$resultado_blob = mysqli_fetch_all($resultado);# busca todoy devuelve siempre un arreglo


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="agregarImg_blob.php" enctype="multipart/form-data">
    <input type="text" name="nombreImg"/>
    <input type="file" name="imagen"/>
    <button type="submit">Agregar</button>
    </form>

    <?php foreach ($resultado_blob as $datoImg): ?>
        <div>
            <?php echo $datoImg[1]; ?>
        <!-- comentarios -->
        <img src="data:image/jpg; base64, <?php echo base64_encode($datoImg[2]); ?>"/>
    <!-- para eliminar: -->
        <a href="eliminar.php?id=<?php echo $datoImg[0]; ?>">Eliminar</a>
        </div>
    <?php endforeach; ?>
</body>
</html>