<!-- Sin terminar -->

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
$a = estaVacio($a);

if ($a === false){
    // Comprobamos si el archivo esta vacio
    $archivo = fopen("texto.txt", "r");
    $contadorLineas = 0;

    // Contamos las lineas de texto para ver si esta vacio
    while (!feof($archivo)){ //!feof significa hasta que no sea el final del archivo
        fgets($archivo); // Esto saca cada linea, si no se pone se genera un bucle infinito
        $contador ++;
    }

    // Generamos una variable con el nombre del archivo .txt para tener donde comprobar si esta vacia
    $nombreArchivo = "texto.txt";
    // Mostramos si el archivo esta vacio
    if (filesize($nombreArchivo) === 0){
        echo "El archivo esta vacio";
    };

    // Mostramos si en el texto aparece la palabra php
    if (strpos(strtolower($nombreArchivo), "php") !== false) {
        echo "La palabra 'php' aparece en el texto";
    } else {
        echo "No se encontró la palabra 'php'";
    };
}
?>