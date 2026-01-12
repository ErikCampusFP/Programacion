<?php
// Hacemos que nos muestre todos los errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Sacamos los datos del formulario
$nombre = $_POST['nombre'];
$password = $_POST['password'];

// Creamos la funcción
function guardarSesion ($nombre, $password) {
    try{
        // Comprobamos si el nombre esta vacio
        if (empty($nombre)){
            throw new Exception("El nombre esta vacio");
        }
        // Comprobamos si en la contraseña hay algun @
        if (strpos($password, '@') === false) {
            throw new Exception("El email no es válido: $password");
        }

        // Generamos el mensaje a guardar en el archivo
        $mensaje  = date("Y-m-d H:i:s"). " | " . $nombre . " | " . $password;
        // Lo guardamos en el archivo .txt (el cual se crea si no existe)
        file_put_contents("usuarios.txt", $mensaje, FILE_APPEND);
        // Añadimos un mensaje para que el usuario sepa que se creo correctamente
        echo "Usuario Creado Correctamente";

    // Recogemos la excepcion que se lanza si hay un error y lo metemos en el archivo txt
    } catch (Exception $excepcion) {
        $mensaje = date("Y-m-d H:i:s") . " - " . $excepcion->getMessage().  PHP_EOL; // PHP_EOL hace que se genere uno debajo de otro
        file_put_contents("errores.log", $mensaje, FILE_APPEND); // File append hace que en vrz de borrarse los errores, se vayan almacenando

        // Generamos un mensaje para avisar al usuario del error
        echo "No se ha podido crear el usuario, Intentelo más tarde";
    }
}

// Llamamos a la función
guardarSesion($nombre, $password);
?>