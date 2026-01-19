<?php
// Importamos la clase
require_once("class_GestorTareas.php");

// Generamos el array de tareas
$listaTareas = [];

// Generamos las tareas
$tarea1 = new tarea();
$tarea1->nombre = "Estudiar PHP";
$tarea1->descripcion = "Repasar clases y objetos";
$tarea1->fechalimite = "2026-01-20";

$tarea2 = new tarea();
$tarea2->nombre = "Hacer ejercicio";
$tarea2->descripcion = "Correr 30 minutos";
$tarea2->fechalimite = "2026-01-21";

$tarea3 = new tarea();
$tarea3->nombre = "Leer un libro";
$tarea3->descripcion = "Leer 20 páginas de un libro de programación";
$tarea3->fechalimite = "2026-01-22";

$tarea4 = new tarea();
$tarea4->nombre = "Hacer la compra";
$tarea4->descripcion = "Comprar comida para la semana";
$tarea4->fechalimite = "2026-01-23";

// Agregamos las tareas al array
$listaTareas[] = $tarea1;
$listaTareas[] = $tarea2;
$listaTareas[] = $tarea3;
$listaTareas[] = $tarea4;

// Marcamos Como Completada dos tareas
$listaTareas[0]->marcarComoCompletada();
$listaTareas[2]->marcarComoCompletada();

// Modificamos descripcion tarea 4
$nuevaDescripcion = "Comprar comida para la semana en el Mercadona";
$listaTareas[3]->editarDescripcion($nuevaDescripcion);

// Mostramos todas las tareas
foreach ($listaTareas as $tarea) {
    $tarea->mostrarTarea(). "<br><br>";
}