<?php
// Hacemos que nos muestre todos los errores
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Generamos la función leerArchivo
function leerArchivo($nombre)
{
    try {

        // Comprobamos si el archivo existe
        if (!file_exists($nombre)){
            throw new Exception("El archivo no existe: $nombre");

        }

        // Comprobamos si el archivo se puede leer
        if (!is_readable($nombre)) {
            throw new Exception("El archivo no se puede leer: $nombre");
        }

        // Leer el contenido del archivo
        $contenido = file_get_contents($nombre);

        // Devolver el contenido si todo ha ido bien
        return $contenido;

    // Recogemos la excepcion que se lanza si hay un error y lo metemos en el archivo txt
    } catch (Exception $excepcion) {
        $mensaje = date("Y-m-d H:i:s") . " - " . $excepcion->getMessage();
        file_put_contents("errores.log", $mensaje, FILE_APPEND); // File append hace que en vrz de borrarse los errores, se vayan almacenando

        // Mostrar mensaje de error al usuario
        echo 'No se pudo leer el archivo. Intentelo más tarde';

        // Devolvemos nada para que se cierre la función
        return null;
    }
};

// Usamos la funcion
$contenido = leerArchivo("notas.txt");  

// Mostramos el contenido del archivo
echo $contenido;
?>