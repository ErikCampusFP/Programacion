<?php
// Generamos la tabla de productos
$productos = ["Manzana" => 1.5, "Sandia" => 2.5, "Platano" => 2.0, "Pera" => 3];
$total = 0;

// Generamos la tabla
echo '<table border="1">';
echo '<tr>';
echo '<td>'. "Producto". '</td>';
echo '<td>'. "Cantidad". '</td>';
echo '<td>'. "Total". '</td>';
echo '</tr>';
// Por cada producto mostramos el producto, la cantidad comprada y el precio final
foreach ($productos as $producto => $precio){
    $cantidad = $_POST["$producto"];
    $precioFinal = $cantidad * $precio;
    $total += $precioFinal;

    echo '<tr>';
    echo '<td>'. "$producto". '</td>';
    echo '<td>'. "$cantidad". '</td>';
    echo '<td>'. "$precioFinal €". '</td>';
    echo '</tr>';
}
// Mostramos el total de la compra
echo '<tr>';
echo '<td>'. "Total Compra". '</td>';
echo '<td colspan ="2">'. "$total €". '</td>';
?>