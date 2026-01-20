<?php
// Importamos la clase
require_once("class_Empleado.php");

// Generamos una instancia de un empleado
$empleado1 = new Empleado();

$empleado1 -> nombre = "Erik";
$empleado1 -> sueldo = 1500;
$empleado1 -> aniosExperiencia = 5;
$empleado1 ->mostrarDetalle();
echo "<br>";
$empleado1->calcularBonus();

echo "<br>";
echo "--------------------------";
echo "<br>";

// Generamos una instancia de un consultor
$consultor1 = new Consultor();

$consultor1 -> nombre = "Pedro";
$consultor1 -> sueldo = 2000;
$consultor1 -> aniosExperiencia = 6;
$consultor1 -> horasPorProyecto = 150;

$consultor1 -> mostrarDetalle();
echo "<br>";
$consultor1 -> calcularBonus(); 
?>