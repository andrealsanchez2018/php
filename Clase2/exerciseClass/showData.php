<?php
    require('conexion.php');
    $sql = "SELECT * FROM contactos";
    $resultado = mysqli_query($conexion, $sql);
    $resultado_contactos = mysqli_fetch_all($resultado); #resultado devuelve un array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing contacts</title>
</head>
<body>
  <!-- <table  method= "POST" action="insertData.php">
    <tr >

        <td> <input type="text" name="id"></td>
       <td> <input type="text" name="nombre"> </td>       
        <td> <input type="text" name="apellido"></td>        
        <td> <input type="text" name="direccion"></td>        
        <td> <input type="number" name="telefono"></td>        
        <td> <input type="text" name="email"></td>        
        <td> <button type="submit">Agregar</button></td>        
    </tr>
</table> -->


 <table>
        <thead>Contactos</thead>
        <tbody>
            <tr> fila 
                
                <th>id</th>
            
                <th>Nombre</th>

                <th>Apellido</th>

                <th>Dirección</th>

                <th>Teléfono</th>

                <th>Email</th>

            </tr>
         
            
    </tbody>
</table> 
<form  method= "POST" action="insertData.php">
<!-- <input type="text" name="id"> -->
<input type="text" name="nombre">
<input type="text" name="apellido">
<input type="text" name="direccion">
<input type="number" name="telefono">
<input type="text" name="email">
<button type="submit">Agregar</button>
</form>
            <?php foreach ($resultado_contactos as $datoInsert):?>
                
            <!-- Para Actualizar -->
        <form method="POST" action="updateData.php">  
            <table  >

            <tr >
            
        <td> <input type="hidden" name="id" value="<?php echo $datoInsert[0] ?>"/> </td>       
        <td> <input type="text" name="nombre" value="<?php echo $datoInsert[1] ?>"/> </td>       
        <td> <input type="text" name="apellido" value="<?php echo $datoInsert[2] ?>"/></td>        
        <td> <input type="text" name="direccion" value="<?php echo $datoInsert[3] ?>"/></td>        
        <td> <input type="number" name="telefono" value="<?php echo $datoInsert[4] ?>"/></td>        
        <td> <input type="text" name="email" value="<?php echo $datoInsert[5] ?>"/></td> 
        <td> <button type="submit">Actualizar</button></td>  
  <!-- Para Eliminar  -->
  <td><a href="eliminar.php?id=<?php echo $datoInsert[0];?>">Eliminar</a></td> 
          
            </tr>
            </table>
            </form>
            <?php endforeach;?>
</body>
</html>