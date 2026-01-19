<?php
// Sacamos valores del formulario
$opcion = $_POST['opcion'];
$cantidad = $_POST['cantidad'];

// Importamos la clase
require_once("class_CuentaBancaria.php");

// Generamos una instancia
$cliente1 = new CuentaBancaria();

$cliente1 -> titular = "Erik";
$cliente1 -> saldo = 2000;
$cliente1 -> tipoDeCuenta = "Ahorro";

if ($opcion == "sacar"){
   $cliente1->retirar($cantidad); 
} else {
    $cliente1->depositar($cantidad);
}

$cliente1->mostrarInfo();
?>