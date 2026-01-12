<?php
// Hacemos que nos muestre todos los errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Generamos la funcion que comprueba que esta vacio
function estaVacio ($a){
    try {
        // Comprobamos que existe el archivo
        if (!file_exists("usuarios.txt")){
            throw new Exception("No existe el archivo");
        }
        
    } catch (Exception $excepcion) {
        $mensaje = date("Y-m-d H:i:s") . " - " . $excepcion->getMessage().  PHP_EOL; // PHP_EOL hace que se genere uno debajo de otro
        file_put_contents("errores.log", $mensaje, FILE_APPEND); // File append hace que en vrz de borrarse los errores, se vayan almacenando

        // Generamos un mensaje para avisar al usuario del error
        echo "No se ha podido contar las lineas del archivo, Intentelo más tarde";
        return $a = true;
    } 
}

// Generamos una variable que nos va a indicar si existe o no el archivo, lo que hara que se ejecute lo demas
$a = false;
// Ejecutamos la funcion con $a para que así cambie la variable si esta vacia
$a = estaVacio($a);
if ($a === false){
    // Comprobamos si esta vacio para dar un mensaje o otro
    $archivo = fopen("usuarios.txt", "r");
    $contador = 0; // Esto es lo que nos va a decir cuantas lienas hay

    while (!feof($archivo)){ //!feof significa hasta que no sea el final del archivo
        fgets($archivo); // Esto saca cada linea, si no se pone se genera un bucle infinito
        $contador ++;
    }

    // Generamos una variable con el nombre del archivo .txt para tener donde comprobar si esta vacia
    $nombreArchivo = "usuarios.txt";

    // Mostramos el resultado al usuario
    if (filesize($nombreArchivo) === 0){
        echo "El archivo esta vacio";
    } else {
        echo "El archivo usuarios.txt posee $contador lineas";
    };
    }
    ?>