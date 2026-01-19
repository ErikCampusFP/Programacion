<?php
// Hacemos que nos muestre todos los errores
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Creamos la función que nos diga si existe
function estaVacio ($a){
    try {
        // Comprobamos que existe el archivo
        if (!file_exists("texto.txt")){
            throw new Exception("No existe el archivo");
        }
        return false;

        
    } catch (Exception $excepcion) {
        $mensaje = date("Y-m-d H:i:s") . " - " . $excepcion->getMessage().  PHP_EOL; // PHP_EOL hace que se genere uno debajo de otro
        file_put_contents("errores.log", $mensaje, FILE_APPEND); // File append hace que en vrz de borrarse los errores, se vayan almacenando

        // Generamos un mensaje para avisar al usuario del error
        echo "No se ha podido acceder al archivo, Intentelo más tarde";
        return $a = true;
    } 
}

// Generamos una variable que nos va a indicar si existe o no el archivo, lo que hara que se ejecute lo demas
$a = false;
$b = false; // Esta variable servira para que si esta vacio el txt no se ejecute lo del resto
$a = estaVacio($a);

if ($a === false){
    // Comprobamos si el archivo esta vacio
    $archivo = fopen("texto.txt", "r");
    $contadorLineas = 0;

    // Contamos las lineas de texto para ver si esta vacio
    while (!feof($archivo)){ //!feof significa hasta que no sea el final del archivo
        fgets($archivo); // Esto saca cada linea, si no se pone se genera un bucle infinito
        $contadorLineas ++;
    }

    // Generamos una variable que contendra el contenido del archivo
    $archivoContenido = file_get_contents("texto.txt");
    // Mostramos si el archivo esta vacio
    if (filesize("texto.txt") === 0){
        echo "El archivo esta vacio";
        $b = true;
    };

    if ($b == false){
        // Mostramos si en el texto aparece la palabra php
        if (strpos(strtolower($archivoContenido), "php") !== false) {
            $contadorPhp = substr_count(strtolower($archivoContenido), "php"); // substr_count sirve para contar las veces que aparece una palabra en un archivo o string
            echo "La palabra php aparece $contadorPhp vez/veces";
        } else {
            echo "No se encontró la palabra php";
        };
    }
}
?>