<?php
// Sacamos la cantidad de dinero del formulario
$cantidad = $_POST['cantidadDinero'];


// Sacamos el numero de billetes de 50 y se lo restamos a la cantidad para que cuente que tenemos esos billetes seleccionados
$cantidadbilletes50 = floor($cantidad / 50);
echo "La cantidad de billetes de 50€ necesarios son: ". $cantidadbilletes50. "<br>";
// Sacamos el numero de billetes que tenemos
$total = $cantidadbilletes50 * 50;
$cantidad -= $total;


// Sacamos el numero de billetes de 20 y se lo restamos a la cantidad para que cuente que tenemos esos billetes seleccionados
$cantidadbilletes20 = floor($cantidad / 20);
echo "La cantidad de billetes de 20€ necesarios son: ". $cantidadbilletes20. "<br>";

// Sacamos el numero de billetes que tenemos
$total = $cantidadbilletes20 * 20;
$cantidad -= $total;


// Sacamos el numero de billetes de 10 y se lo restamos a la cantidad para que cuente que tenemos esos billetes seleccionados
$cantidadbilletes10 = floor($cantidad / 10);
echo "La cantidad de billetes de 10€ necesarios son: ". $cantidadbilletes10. "<br>";

// Sacamos el numero de billetes que tenemos
$total = $cantidadbilletes10 * 10;
$cantidad -= $total;


// Sacamos el numero de billetes de 5 y se lo restamos a la cantidad para que cuente que tenemos esos billetes seleccionados
$cantidadbilletes5 = floor($cantidad / 5);
echo "La cantidad de billetes de 5€ necesarios son: ". $cantidadbilletes5. "<br>";

// Sacamos el numero de billetes que tenemos
$total = $cantidadbilletes5 * 5;
$cantidad -= $total;

// Sacamos el numero de billetes de 1 y se lo restamos a la cantidad para que cuente que tenemos esos billetes seleccionados
$cantidadbilletes1 = floor($cantidad / 1);
echo "La cantidad de monedas de 1€ necesarios son: ". $cantidadbilletes1. "<br>";

// Sacamos el numero de billetes que tenemos
$total = $cantidadbilletes1 * 1;
$cantidad -= $total;
?>