<?php
// Importamos la clase
require_once("class_Persona.php");
// Generamos el objeto
$estudiante1 = new Estudiante("Luis", 20);
$estudiante1->curso = "Informatica";
$estudiante1->mostrarDatos();

$estudiante2 = new Estudiante("Carlos", 22);
$estudiante2->curso = "Derecho";
$estudiante2 -> mostrarDatos();
?>