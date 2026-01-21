<?php
// Importamos la clase
require_once("class_Alumno.php");
// Generamos el nuevo alumno
$alumno = new Alumno("Juan", "PHP");
$alumno ->presentarse();
?>