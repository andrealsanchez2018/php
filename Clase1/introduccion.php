<?php

// 
/* 

        PHP - Hypertext Preprocessor
            Lenguae de programación que se ejecuta del lado del servidor
            (Backend). Es uno de los lenguajes mas soportados en la web 
            ya que todos los servidores  o servicios de hodting entienden php
            Gestores de contenidos  como wordpress estan basados en PHP.
            Es debilmente tipado.

            Puede incrstarse en HTML e incluso puede interpretar su sintaxis
            PHP necesita u compilador (en este aso Apache)


*/
// Arreglos
$colores = array('Rojo','Verde', 'Azul'); // js let colores=[]

// foreach ($variableArray as $apodo)
foreach($colores as $color){
    echo "$color <br>";
}

echo "<hr>";

// FOR TRADICIONAL

$paises = array('Finlandia', 'Suecia', 'Noruega', 'Islandia');
$cantPaises = count($paises);#longitud de Arreglo
for($i = 0; $i < $cantPaises; $i++){
    echo $paises[$i] . "<br>"; #ejemplo de concatenacion
}
echo "<hr>"; #    Formas de console.log =>  var_dump($variable) = typeof Javascript / print_r($variable)

// Arreglos asociativos -- tine una clave y un valor -- parecido a un JSON
$personas = array('JuanCho'=>'45', 'Camilo' =>'25');// "=>" es como el ":" del JSON
echo "Nuestro Dorian Gray tiene " .$personas['JuanCho']. " años"; // debe haber cambio en las comillas para diferenciar texto de los datos o variables string
echo "<hr>";

// Recorrer un array asociativo

foreach($personas as $nombre => $edad){
    echo "<b>Clave:</b> " . $nombre . " <b>Valor:</b> " . $edad . "<br>";
}

echo "<hr>";

// Arreglo multidimensional
/* 
let alimentos =[
    [],
    [],
    []

]

*/

$alimentos = array
(           #0
    array('Pizza', 5000, 5), #0
    array('Galletas', 600, 10), #1
    array('Pizza', 2000, 7), #2
);

echo $alimentos[1][0] . " : cantidad" . $alimentos[1][2] . "<br>";
echo $alimentos[2][0] . " : valor" . $alimentos[2][1] . "<br>";
echo "<hr>";

//datos = array(4) insertar datos array_push / para eliminar toda la variable unset()
// array_pop tambien elimina pero solo el ultimo dato del array

// Segunda forma

$productos = [
        [
            'nombre' => 'Minichips',
            'precio' => 1000,
            'cantidad' => 4
        ],

        [
            'nombre' => 'Salchipapa',
            'precio' => 10000,
            'cantidad' => 8
            
        ]

        
];

    $total = 0; #acumulativa
    foreach ($productos as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
        echo $producto['nombre'] . ": $" . $producto['precio'] . " x " . $producto['cantidad'] . "<br>";
        // Minichips:
    }        

    echo "Total: $total";
    echo "<hr>";


    /* 
        Ejercicio

        Crear un arreglo que contenga asociación por clave y valor
        de películas. Debe tener la siguiente estructura:
        Nombre Película
        Director
        anho
        Personaje Principal

        Mínimo 5 películas
        Deben imprimirse en el HTML.
        nombre Película - Título 
        Director - negrilla
        anho - subrayado
        personaje principal - cursiva

    */

    $peliculas = [
            [
                'nombrePel' => 'Vértigo',
                'director' => 'Alfred Hitchcok',
                'anho' => 1958,
                'presonajePpal' => 'Kim Novak'
            ],
            [
                'nombrePel' => 'Ciudadano Kane',
                'director' => 'Orson Welles',
                'anho' => 1941,
                'presonajePpal' => 'Orson Welles'
            ],
            [
                'nombrePel' => 'Cuentos de Tokio',
                'director' => 'Yasujirô Ozu',
                'anho' => 1953,
                'presonajePpal' => 'Chishu Ryu‎'
            ],
            [
                'nombrePel' => 'La regla del juego',
                'director' => 'Jean Renoir',
                'anho' => 1939,
                'presonajePpal' => 'Jean Renoir'
            ],
            [
                'nombrePel' => 'Odisea en el espacio',
                'director' => 'Stanley Kubrick',
                'anho' => 1968,
                'presonajePpal' => '‎Keir Dullea‎'
            ]
        ];

        foreach ($peliculas as $pelicula) { 
            echo    "<h2>" . $pelicula['nombrePel'] . "</h2>" . "<br>" . 
                    "<b>" .  " Director: "  . $pelicula['director'] . "</b>"  .  "<br>" .
                    "<b>" . "Año: " . "</b>" . "<u>" . $pelicula['anho'] . "</u>" . "<br>" .
                    "<b>" . "Protagonista: " . "</b>" . "<i>" . $pelicula['presonajePpal'] . "</i>" .  "<br>";
        }

        /* Deben imprimirse en el HTML.
        nombre Película - Título 
        Director - negrilla
        anho - subrayado
        personaje principal - cursiva */

?>