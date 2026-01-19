<?php
// Valores del diccionario
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
// Valor contador
$contador = 0;
// Comprobación pregunta 1
echo "1. ¿Para qué sirve una variable?";

if ($pregunta1 == "a"){
    $contador +=1;
    echo "<p style ='color: Green;'>Respuesta Correcta, la respuesta es = Para guardar información</p>";
} else {
    echo "<p style ='color: red;'>La respuesta correcta es la opción A = Guardar información</p>";
};

// Comprobación pregunta 2
echo "2. ¿Cuál de estos es un lenguaje de programación?";
if ($pregunta2 == "b"){
    $contador +=1;
    echo "<p style ='color: Green;'>Respuesta Correcta, la respuesta es = Python </p>";

} else {
    echo "<p style ='color: red;'>La respuesta correcta es la opción B = Python</p>";
};

// Comprobación pregunta 3
echo "3. ¿Qué símbolo se usa normalmente para terminar una instrucción en muchos lenguajes como C, Java o PHP?";
if ($pregunta3 == "c"){
    $contador +=1;
    echo "<p style ='color: Green;'>Respuesta Correcta, la respuesta es = ;</p>";

} else {
    echo "<p style ='color: red;'>La respuesta correcta es la opción C = ;</p>";
};
// Mostrar Resultado Final
echo "<h2>NOTA FINAL</h2>";
echo "Tu nota final es de $contador/3";
?>