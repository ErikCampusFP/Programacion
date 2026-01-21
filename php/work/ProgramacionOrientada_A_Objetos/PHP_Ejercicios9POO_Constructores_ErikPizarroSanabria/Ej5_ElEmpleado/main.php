<?php
// Importamos la clase
require_once("class_Empleado.php");
// Generamos los objetos
$becario = new Empleado("Gonzalo", "Becario", 800);
$becario ->revisarSueldo();

$jefa = new Empleado("Sara", "Jefa", 2500);
$jefa->revisarSueldo();
?>