<?php
// Importamos la clase
require_once("class_Login.php");
// Generamos los objetos
$User1 = new Login("Carlos", "ABC");
$User1 -> comprobar();
$User2 = new Login("Pepito", 1234);
$User2 -> comprobar();
?>