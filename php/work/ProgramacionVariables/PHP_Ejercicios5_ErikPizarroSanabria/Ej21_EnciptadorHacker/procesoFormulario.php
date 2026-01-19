<?php
// Generamos el diccionario de sustitución
$letras = ["A", "E", "I", "O", "U"];
$sustitucion = ["4", "3", "1", "0", "5"];
// Sacamos el texto del formulario
$texto = $_POST['texto'];
// Cambiamos el texto al generado
$textoCambiado = str_ireplace($letras, $sustitucion, $texto);
// Mostramos el resultado
echo "Hackeada: $textoCambiado";
?>