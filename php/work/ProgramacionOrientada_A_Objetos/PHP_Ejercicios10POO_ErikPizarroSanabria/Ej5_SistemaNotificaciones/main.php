<?php
// Insertamos la clase
require_once("class_Notificacion.php");
// Creamos un objeto
$correo1 = new Email("Hola", "cliente@web.com");
$correo1->enviar();
?>