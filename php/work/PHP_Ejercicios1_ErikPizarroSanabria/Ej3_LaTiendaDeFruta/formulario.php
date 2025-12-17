<?php
// Productos
$productos = ["Manzana" => 1.5, "Sandia" => 2.5, "Platano" => 2.0, "Pera" => 3];

// Generamos el formulario
echo "<form action='procesoFormulario.php' method='POST'>";

// Generamos un label e imput por producto
foreach ($productos as $nombre => $precio) {
  echo "<label>$nombre</label>". "   ";
  echo "<input type='number' name='$nombre' min='0' required><br><br>";
}

echo "<input type='submit' value='Enviar'>";
echo "</form>";

?>