<?php
// Insertamos la clase
require_once("class_Reloj.php");
// Generamos el objeto
$reloj1 = new SmartWatch("Samsung", "Android");
$reloj1->mostrarDatos();

$reloj2 = new SmartWatch("Iphone", "OS");
$reloj2->mostrarDatos();
?>