<?php
// Lo unimos a Asistencias.php para que pueda usar las asistencias
require_once __DIR__ . '/Asistencias.php';

// Creamos la clase
class RepositorioAsistencias{

    // Generamos la variable y el constructor que almacene la posición de guardado de las notas
    public $rutaArchivo;
    public function __construct()
    {
        $this->rutaArchivo = __DIR__ . '/../../storage/asistencias.txt';
    }

    // Generamos las funciones
    // Función obtener todas las Asistencias

    public function obtenerTodas(){
        // 1. Si el archivo no existe devolvemos []
        if (!file_exists($this->rutaArchivo)){
            return [];
        }
        // Generamos el array de notas
        $asistencias = [];
        // 2. Leemos cada linea del fichero
        $lineas = file($this->rutaArchivo);
        // 3. Por cada lineas ignoramos las lineas vacias y creamos una nota
        foreach($lineas as $linea){
            if(trim($linea) == ''){
                continue;
            }
        
            // Organizamos la linea con la función desdeLinea
            $asistencia = Asistencias::desdeLinea($linea);

            // Agregamos las asistencias al array
            $asistencias[] = $asistencia;
        }
        // 4. Devolvemos el array
        return $asistencias;
    }

    // Función Agregar Asistencias
    public function agregar(Asistencias $asistencia){
        // 1. Creamos la línea que será la nota con la función de la clase Asistencia
        $linea = $asistencia->unaLinea() . "\n";

        // 2. Escribimos la asistencia en el fichero de texto
        $resultado = file_put_contents($this->rutaArchivo, $linea, FILE_APPEND);

        // 3. Si da error (devolviendo False), lanzamos excepción
        if ($resultado === false) {
        throw new Exception("No se pudo escribir en notas.txt");
        }
    }
}
?>