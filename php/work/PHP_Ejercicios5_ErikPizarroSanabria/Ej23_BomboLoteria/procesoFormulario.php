<?php

// Sacamos el valor del formulario
$numeroBolas = $_POST['numero'];

// Generamos el array que poseera los numeros sacados
$lista = [];

// Generamos el numero de numeros a corde con lo que dijo el usuario
while (count($lista) < $numeroBolas){
    $numero = rand(1, 50);
    // Comprobamos que no este ya el numero generado y si no lo esta lo añadimos esto gracias a la comprobación !in_array -> la cual indica si no esta en el array
    if (!in_array($numero, $lista)){
        $lista[] = $numero; // Esto le añade al array (el cual es la lista) el numero
    };
};

// Ordenamos la lista de menor a mayor
sort($lista);
// Mostramos el array con un foreach mientras creamos un contador para que se ordene los resultados
$contador = 1;
foreach ($lista as $numero){
    echo "Numero $contador -> ". $numero . "<br>";
    $contador++;
};
?>