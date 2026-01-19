<?php

// Hacemos que nos muestre todos los errores
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Generamos la función que compruebara si el formulario es correcto
function comprobaFormulario ($a) { 
    // Comprobamos si el email posee el @
    try{
        $email = $_POST['email'];
        $longCont = strlen($email);
        $hayArroba  = false;

        for ($i = 0; $i < $longCont; $i++){
            if ($email[$i] === "@"){
                $hayArroba = true;
            };
        };
        // Si no hay arroba, lanzamos la excepcion
        if ($hayArroba == false){
            throw new Exception("El email no posee una arroba");
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

        $mensaje = date("Y-m-d H:i:s"). " | " . "EJ29" . " | ".  $excepcion->getMessage(). " | " . "index.html" . " | ".  $lineas. PHP_EOL;
        file_put_contents("errores.log", $mensaje, FILE_APPEND);
        echo "El email no posee un @, escribalo de nuevo";
        return $a = false;
    };
    return $a = true;

}
// Generamos la variable $a y hacemos que sirva para saber si a ocurrido la excepción o no
$a = true;
$a = comprobaFormulario($a);

if ($a == true){
    // Sacamos los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad  =$_POST['edad'];
    $comentario = $_POST['comentario'];
    
    // Añadimos el mensaje propuesto al archivo .txt
    $registro = date("Y-m-d H:i:s"). " | " . $nombre . " | " . $email . " | " . $edad . " | " . $comentario . "\n"; // Se puede utilizar \n o PHP_EOL para hacer un salto de linea
    file_put_contents("registros.txt", $registro, FILE_APPEND);
    // Mostramos al usuario un mensaje para avisarle que el guardado ha sido realizado correctamente
    echo 'Registro Almacenado Correctamente';
}
?>