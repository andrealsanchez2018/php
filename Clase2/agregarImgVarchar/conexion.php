<?php

/* 
    vamos a utilizar una extension de php que se llama mysqli
    mysqli_connect('hosting', 'usuario', 'contraseña', 'base de datos')
*/

$conexion = mysqli_connect('localhost','root', '', 'agregar_img'); # conexión entre php y mysql

/* tambien se puede asi
$hosting= localhost
$conexion = mysqli_connect($hosting,'root', '', 'agregar_img'); # conexión entre php y mysql
*/

?>