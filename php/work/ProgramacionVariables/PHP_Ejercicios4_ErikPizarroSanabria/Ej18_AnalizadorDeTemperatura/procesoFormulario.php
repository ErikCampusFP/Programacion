<?php
// Sacamos los datos del fomulario
$temperaturas = $_POST ["temp"];

// Calculamos lo solicitado
$temperaturaMedia =  array_sum($temperaturas) / 5;
$temperaturaMaxima = max($temperaturas);
$temperaturaMinima = min($temperaturas);

// Mostramos el resultado
echo "La temperatura media de los días ha sido de: $temperaturaMedia Cº". "<br>";
echo "La mayor temperatura de los 5 días ha sido de: $temperaturaMaxima Cº". "<br>";
echo "La menor temperatura de los 5 días ha sido de $temperaturaMinima Cº". "<br>";
?>