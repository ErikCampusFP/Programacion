<?php
// Sacamos el numero de lanzamientos del html
$numeroLanzamientos = $_POST['numero'];
// Generamos la  variable del total
$total = 0;

// Hacemos un buvle que dure hasta que se lanzen el numero de veces dictadas por el usuario
for($contador = 0; $contador != $numeroLanzamientos; $contador++){
    // Generamos un numero aleatorio del 1 al 6
    $num = rand(1,6);
    // Sumamos al total el resultado del lanzamiento
    $total += $num;

    // Generamos el div con el resultado dentro
    echo "<div style='height:50px; width:50px; border:1px solid black; display: flex; justify-content: center; align-items: center; background-color: black; color: white';>";
    echo $num;
    echo "</div><br>";
}
// Mostramos la suma total
echo "La suma total de los $numeroLanzamientos dados es de: $total";

?>