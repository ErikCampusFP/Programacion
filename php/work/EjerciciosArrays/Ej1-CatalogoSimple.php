<?php

// Generamos array asociativo
$lista = [
    "Pan" => 1,
    "Leche" => 2,
    "Huevos" => 3
];

// Lo mostramos en una lista desordenada
echo "<ul>";
foreach ($lista as $producto => $precio){
    echo "<li>$producto:$precio</li> <br>"; 
}
echo "</ul>";



?>