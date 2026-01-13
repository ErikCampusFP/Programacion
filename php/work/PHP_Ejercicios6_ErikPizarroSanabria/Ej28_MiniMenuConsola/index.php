<?php
// Hacemos que nos muestre todos los errores
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Generamos la función que comprueba si existe la tarea y si no existe se crea el archivo
function existe ($a){
    try {
       if (!file_exists("tareas.txt")){
            throw new Exception("No existe el archivo");
        }  
    } catch (Exception $excepcion){
        $mensaje = date("Y-m-d H:i:s") . " - " . $excepcion->getMessage().  PHP_EOL; // PHP_EOL hace que se genere uno debajo de otro
        file_put_contents("errores.log", $mensaje, FILE_APPEND); // File append hace que en vrz de borrarse los errores, se vayan almacenando

        // Generamos un mensaje para avisar al usuario de que no existe el archivo
        echo "No existe tareas todavia";
        $nombreArchivo = "tareas.txt";
        fopen($nombreArchivo, "w");
        return $a = true; // Utilizamos la variable $a para poder hacer que si el archivo no existe, no se genere el resto
    } 
}

// Generamos el valor base de la variable $a
$a = false;
// Comprobamos si existe
$a = existe($a);

// Generamos la respuesta del menu y la tarea, ya que esta simulado
if ($a == false){
  $respuesta = 1;
  $tareaGenerada = 'Sacar al Perro';

  // Mostramos el resultado del menu en base a la respuesta

  // Añadimos la tarea al archivo .txt  
  if ($respuesta == 1){
    $mensaje = date("Y-m-d H:i:s") . "|" . $tareaGenerada. PHP_EOL; // PHP_EOL hace que se genere uno debajo de otro
    file_put_contents("tareas.txt", $mensaje, FILE_APPEND);
    echo 'Tarea Añadida Correctamente';

// Generamos para que nos muestre todo lo que se encuentre en el interior del archivo
} elseif ($respuesta == 2){
    $contenido = file_get_contents("tareas.txt");
    if ($contenido !== false) {
        echo nl2br($contenido);
    };    
    // Salimos
} elseif ($respuesta == 3) {
    echo 'Hasta Luego, Pase Buena Tarde';
    // Generamos la posibiidad de que sea una opción valida, y hacemos que añada el error a errores.log
} else {
    $mensaje2 = date("Y-m-d H:i:s") . " - " . 'Opción No valida'. PHP_EOL;
    file_put_contents("errores.log", $mensaje2, FILE_APPEND);
    echo 'La  respuesta no es valida. Intentelo más tarde';
};
}
?>