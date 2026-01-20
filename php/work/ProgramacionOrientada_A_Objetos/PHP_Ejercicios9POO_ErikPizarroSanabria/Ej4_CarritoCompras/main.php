<?php
// Importamos la clase
require_once("class_carrito.php");

// Generamos la instancia del carrito
$carrito = new Carrito();

// Agregamos los productos
$carrito->agregarProducto("Leche", 1.5, 2);
$carrito->agregarProducto("Queso", 2.6, 2);
$carrito->agregarProducto("Pan", 0.8, 2);

// Mostramos detalle antes de eliminar un producto
echo "Detalle del carrito antes de eliminar:". "<br>";
$carrito->mostrarDetalleCarrito();

// Eliminamos un producto
$carrito->eliminarProducto("Pan");

// Mostramos detalle después de eliminar
echo "-------------------------------------------------------------------". "<br><br>";
echo "Detalle del carrito después de eliminar producto:" . "<br>";
$carrito->mostrarDetalleCarrito();

// Calcular total
echo "-------------------------------------------------------------------". "<br><br>";
$carrito->calcularTotal();
?>