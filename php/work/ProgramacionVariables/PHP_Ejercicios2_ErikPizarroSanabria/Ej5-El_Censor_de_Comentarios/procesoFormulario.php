<?php
$prohibidas = ["tonto", "feo", "retrasado", "anormal"];
// Sacamos el texto del formulario
$texto = $_POST['texto'];
foreach ($prohibidas as $palabra){
    
    // Con strlen calculo la longitud de la palabra
    $numeroAsteriscos = strlen($palabra);
    // Con str_repeat genero el numero de asteriscos en base a la longitud de la palabra
    $asteriscos =  str_repeat("*", $numeroAsteriscos);
    // Generemaos el texto censurado, usando str_replace que sustitulle las palabras que se encuentren en la lista con asteriscos
    $texto =   str_replace($palabra, $asteriscos, $texto);
};
// Mostramos el texto
echo $texto;
?>