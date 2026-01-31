<?php
// Lo unimos a Tarea.php para que pueda usar las tareas
require_once __DIR__ . '/Tarea.php';

// Generamos la clase
class RepositorioTareas{

    // Generamos la variable y el constructor que almacene la posición de guardado de las tareas
    public $rutaArchivo;
    public function __construct()
    {
        $this->rutaArchivo = __DIR__ . '/../../storage/tareas.txt';
    }

    // Generamos las funciones

    // Función que nos da todas las notas
    public function obtenerTodas(){
        // 1. Comprobamos si el archivo existe, simp devolvemos la lista vacia
        if(!file_exists($this->rutaArchivo)){
            return [];
        }
        
        // 1.5. Generamos el array de notas
        $tareas = [];

        // 2. Leemos cada linea del fichero
        $lineas = file($this->rutaArchivo);
        
        // 3. Por cada linea, comprobamos si esta vacia, si lo esta la ignoramos, sino la contamos, y al final creamos la nota
        foreach($lineas as $linea){
            if(trim($linea) === ''){
                continue; // Si la linea esta vacia, continua
            }

            // Organizamos la tarea con la función desdeLinea
            $tarea = Tarea::desdeLinea($linea);
            // Añadimos la tarea a un array de tareas que contendra todas las tareas
            $tareas[] = $tarea;
        }
        // 4. Devolvemos el array con todas las tareas
        return $tareas;
    }

    // Función que agrege nuevas tareas
    public function agregar(Tarea $tarea){ // El Tarea $tarea sirve para indicar que la variable viene de la clase Tarea
        // 1. Creamos la linea que sera la tarea con la función de la clase Tarea
        $linea = $tarea->unaLinea() . "\n";

        // 2. Escribimos la tarea en el fichero de texto
        $resultado = file_put_contents($this->rutaArchivo, $linea, FILE_APPEND);

        // 3. Si da error (devolviendo False), lanzamos excepción
        if ($resultado === false) {
            throw new Exception("No se pudo escribir en tarea.txt");
        }
    }  
}
?>