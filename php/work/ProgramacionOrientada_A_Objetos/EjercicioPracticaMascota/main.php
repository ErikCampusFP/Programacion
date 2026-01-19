<?php

// Añadimos la clase Mascota
require_once("class_mascota.php");

// Creamos una instancia de Mascota
$miMascota = new Mascota;
$miMascota->nombre = "Toby";
$miMascota->tipo = "perro";

// Usar los métodos
$miMascota->presentar();
$miMascota->emitirSonido();