<?php
// Importamos la clase
require_once("class_Producto.php");
// Generamos el objeto
$ordenador = new Producto("Ordenador de Sobremesa", 500);
$ordenador ->precioFinal();
?>