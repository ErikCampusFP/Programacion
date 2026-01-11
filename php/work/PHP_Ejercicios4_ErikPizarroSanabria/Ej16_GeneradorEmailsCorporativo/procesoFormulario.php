<?php
// Sacamos los valores del formulario
$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$dominio = $_POST ["dominio"];

// Convertimos los valores en lo que nos interesa para generar el correo y quitamos los espacios
// Nombre a solo la primera letra
$nombre = substr($nombre, 0, 1);

// Dominio a solo el dominio
$dominio = trim($dominio,"https://www.");

// Quitamos los espacios a todos
// Principio
$nombre = ltrim($nombre);
$dominio = ltrim($dominio);
$apellido = ltrim($apellido);

// Final
$nombre = rtrim($nombre);
$dominio = rtrim($dominio);
$apellido = rtrim($apellido);

// Generamos el correo
$correo = $nombre.$apellido.$dominio;
// Lo hacemos minuscula
$correo = strtolower($correo);
// Mostramos el correo
echo "Tu nuevo correo es: $correo";
?>