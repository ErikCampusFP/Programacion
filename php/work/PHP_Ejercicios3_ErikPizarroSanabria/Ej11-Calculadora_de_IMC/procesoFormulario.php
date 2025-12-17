<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    
</body>
</html>
<?php
// Sacamos los datos del formulario
$peso = $_POST['peso'];
$altura = $_POST['altura'];

// Pasamos la altura a metros
$alturaEnMetros = $altura/100;

// Calculamos el IMC
$IMC = $peso / ($alturaEnMetros**2); // El **2 eleva al cuadrado

// Mostramos un resultado dependiendo del IMC
if($IMC < 18.5){
    echo "<div class='alerta-amarilla'>". "Bajo Peso". "</div>";
} elseif ($IMC <= 24.9){
    echo "<div class='alerta-verde'>". "Peso Normal". "</div>";
} elseif ($IMC > 25){
    echo "<div class='alerta-roja'>". "Sobrepeso". "</div>";
};
?>