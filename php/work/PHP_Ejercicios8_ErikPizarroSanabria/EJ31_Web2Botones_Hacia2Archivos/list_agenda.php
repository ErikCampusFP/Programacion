<?php
// Hacemos que nos muestre todos los errores
ini_set("display_errors", 1);
error_reporting(E_ALL);
// Titulo Pagina
echo "<h1>Contactos</h1>";
// Generamos la función que compruebe si existe el archivo
function existeArchivo ($a){
    try {
        if (!file_exists("registros.txt")){
            throw new Exception("No existe el archivo");
        }
    } catch (Exception $excepcion){

    // Calculamos el numero de lineas que tiene para poner en el mensaje en la linea en la que se encunetra
    $lineas = 1;

    if (file_exists("errores.log")) { 
        $lineas = 0;

        if ($archivo = fopen("errores.log", "r")) {

            while (!feof($archivo)) {
                fgets($archivo);
                $lineas++;
            }
            fclose($archivo);
        }
    }
    // Generamos el mensaje de error y lo guardamos en errores.log
    $mensaje = date("Y-m-d H:i:s") . " | " . "EJ31" . " | " . $excepcion->getMessage(). "|" . "Linea del Archivo de Error: $lineas" . "\n";
    file_put_contents("errores.log", $mensaje, FILE_APPEND);
    echo '<p style= "color: red;">No se pudo leer el archivo. Intentelo más tarde</p>'; // Creamos un mensaje para avisar al usuario que no se a podido leer
    return $a  = false;
    }
    return $a = true;
}

$a  = true;
$a = existeArchivo($a);

if ($a === true){
    fopen("registros.txt", "r");
    $numeroContacto = 1; // Generamos una variable que indique el numero de contacto

    $contactos = file("registros.txt"); // Utilizamos file para transformar en array el texto y así poder mostrarlo
    foreach ($contactos as $contacto) {
        echo "Contacto $numeroContacto: " . $contacto . "<br>";
        $numeroContacto ++;
    }

}
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Botón para salir al inicio -->
    <a href="./index.php"><button style= "cursor: pointer;">Volver al Inicio</button></a>
</body>
</html>