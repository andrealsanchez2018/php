<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro :: Clases PHP</title>
</head>
<body>
<div id="registroForm">
   <form method="POST" action="control/usuarioControl.php?accion=registrar"> <!-- ?accion=registrar es para no crear otro archivo- registrar.php sino hacerlo todo en usuarioControl -->
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
        <br>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido" />
        <br>
        <input type="text" name="correo" id="correo" placeholder="Correo" />
        <br>
        <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" />
        <br>
        <input type="submit" value="Registrar" name="enter"/>
  
   </form>
   </div> 
</body>
</html>