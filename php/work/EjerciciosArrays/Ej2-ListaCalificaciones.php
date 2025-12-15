<?php

// Generamos el array Multidimensional
$clase = [
        // Alumno 0
        [
            "Nombre" => "Carlos Pérez",
            "Nota" => 8
        ],
        // Alumno 1
        [
            "Nombre" => "Maria Sanchez",
            "Nota" => 10
        ],
        // Alumno 2
        [
            "Nombre" => "Segio Jimenez",
            "Nota" => 4
        ]
    ];


    foreach ($clase as $contacto){
        echo "El alumno ". $contacto["Nombre"]. "tiene una nota de ".  $contacto["Nota"]. "<br>";
    }




    echo "Nota: <br>";
    echo "<br> Contenido de todas las variables de PHP en este momento: <br> ";

    $variables = get_defined_vars();

    foreach ($variables as $variable){
        echo "<br>";
        var_dump(($variable));
        echo "<br>";
    }
    
    
?>