<?php
// Productos
$productos = ["Manzana" => 1.5, "Sandia" => 2.5, "Platano" => 2.0];

foreach ($productos as $nombre => $precio) {
      echo "$nombre - $precio €: ";
      echo '<input type="number" name="cantidad_' . strtolower($nombre) . '" min="0" value="0">';
      echo "<br><br>";
  }

?>

