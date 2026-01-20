<?php
// Importamos la clase
require_once("class_Personaje.php");

// Creamos los personajes
$guerrero = new Personaje();
$guerrero->nombre = "Guerrero";
$guerrero->nivel = 1;
$guerrero->puntosdVida = 100;
$guerrero->puntosdAtaque = 20;

$mago = new Personaje();
$mago->nombre = "Mago";
$mago->nivel = 1;
$mago->puntosdVida = 50;
$mago->puntosdAtaque = 25;

$arquero = new Personaje();
$arquero->nombre = "Arquero";
$arquero->nivel = 1;
$arquero->puntosdVida = 40;
$arquero->puntosdAtaque = 30;

// Mostramos las estadisticas de los personajes
echo "<h3>Estadísticas iniciales</h3>";
$guerrero->verEstadisticas();
echo "<br>";

$mago->verEstadisticas();
echo "<br>";

$arquero->verEstadisticas();
echo "<hr>"; // <hr> genera un corte en la pagina, util para dividir la pagina en partes

// Generamos los ataques y las curaciones
$guerrero->atacar($mago);
$mago->curarse(5);
$arquero->atacar($mago);
$guerrero->atacar($mago);

// Subimos de nivel a un personaje
$arquero->subirNivel();

// Mostramos las estadísticas finales
echo "<hr><h3>Estadísticas finales</h3>";
$guerrero->verEstadisticas();
echo "<br>";
$mago->verEstadisticas();
echo "<br>";
$arquero->verEstadisticas();
?>