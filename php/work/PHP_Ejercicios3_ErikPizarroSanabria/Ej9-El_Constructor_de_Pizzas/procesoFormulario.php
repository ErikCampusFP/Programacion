<?php
// Sacamos las variables del formulario
$grosor = $_POST['grosor'];
$ingredientes = $_POST['ingredientes'];

// Generamos el precio Final
$precioIngredientes = count($_POST['ingredientes']);
$precioTotal = $grosor + $precioIngredientes;

// Motramos cada ingrediente en una lista desordenada
echo "Ingredientes:";
echo "<ul>";
foreach($ingredientes as $ingrediente){
    echo "<li>".$ingrediente. "</li>";
};
echo "</ul>";

// Mostramos el precio final
echo "Precio total: $precioTotal €";
?>