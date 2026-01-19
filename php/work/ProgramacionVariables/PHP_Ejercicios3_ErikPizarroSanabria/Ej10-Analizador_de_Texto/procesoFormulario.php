<?php
// Sacamos texto del formulario
$texto = $_POST['texto'];
// Define la longitud del texto
$longitudTexto = strlen($texto);
// Define cuantas palabras hay en el texto
$numeroPalabras = str_word_count($texto);
// Genera el texto al reves
$textoAlReves = strrev($texto);
// Comprueba si aparece la palabra PHP en el texto
$contienePHP = str_contains($texto, 'PHP');

// Mostramos el resultado
echo "Número total de caracteres = $longitudTexto"."<br>";
echo "Número total de palabras = $numeroPalabras"."<br>";
echo "Texto al Reves:"."<br>";
echo $textoAlReves. "<br>";

if($contienePHP == true){
    echo "El texto contiene la palabra PHP";
} else {
    echo "El texto no posee la palabra PHP";
};
?>