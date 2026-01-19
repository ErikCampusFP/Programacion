<?php
// Generamos lista de peliculas
$peliculas = [
    // Película 0
    [
        "nombre" => "Mad Max: Furia en la carretera",
        "genero" => "accion",
        "edad minima" => 16
    ],
    // Película 1
    [
        "nombre" => "John Wick",
        "genero" => "accion",
        "edad minima" => 16
    ],
    // Película 2
    [
        "nombre" => "Misión Imposible: Fallout",
        "genero" => "accion",
        "edad minima" => 12
    ],
    // Película 3
    [
        "nombre" => "Los Vengadores",
        "genero" => "accion",
        "edad minima" => 12
    ],
    // Película 4
    [
        "nombre" => "Bad Boys",
        "genero" => "accion",
        "edad minima" => 16
    ]
];

// Sacamos el genero del formulario
$generoForm = $_POST['genero'];

// Generamos la variable que indicara si no hay pelicula del genero
$existePelicula = 0;

// Recorremos las peliculas haber si hay de ese genero
foreach ($peliculas as $pelicula) {
    if ($pelicula["genero"] == $generoForm) {
        echo '<div style= "border-style: solid;">';
        // font-weight pone el texto en negrita
        echo '<p style= "font-weight: bold;">'. "Nombre: ". $pelicula["nombre"]. "</p>";
        echo '<p style= "font-style: italic;">'. "Genero: ". $pelicula["genero"]. "</p>";
        echo "<p>". "Edad minima: ". $pelicula["edad minima"]. "</p>";
        echo '  </div>';

        echo "<br>";     
        $existePelicula ++;
    };
}

if ($existePelicula == 0) {
    echo "No Existen Peliculas con el genero $generoForm";
}
?>