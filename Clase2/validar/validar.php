<?php

// $nombre = $_GET['nombre']; # a través de la variable superglobal $_GET traemos el dato por atributo nombre(LOS DATOS VAN EN EL LINK)
$nombre = $_POST['nombre']; # CON $_POST ES LO MISMO QUE GET PERO HAY MAS SEGURIDAD EN LOS DATOS
                            # LOS DATOS CON POST VAN EN LA CABECERA
// Validar si los campos estan vacíos
/* isset() -> si la variable existe y su valor es diferente a null / $nombre !=null
   empty() -> el valor de la variable es vacío                   / $nombre = ""
   is_null() -> variable esta declarada y su valor es null
*/

if(isset($nombre)&& empty($nombre)){
    echo "No puedes acceder";
} else {
    echo "Bienvenido $nombre";
}

?>

<!-- JSON - TIPO DE DAOS MAS LIGERO PARA TRANSPORTARLOS -->