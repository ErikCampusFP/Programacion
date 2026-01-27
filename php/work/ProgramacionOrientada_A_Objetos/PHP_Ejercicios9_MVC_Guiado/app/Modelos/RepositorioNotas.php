<?php
// Unimos Notas.php a RepositorioNotas.php
require_once __DIR__ . '/Nota.php';

class RepositorioNotas{

    public $rutaArchivo;

    // Generamos un consturctor que nos de la ruta del fichero
    public function __construct()
    {
        $this->rutaArchivo = __DIR__ . '/../../storage/notas.txt';
    }

    // Generamos una función que nos de todas las notas
    // 1. Si el archivo no existe devolvemos []
    public function obtenerTodas(){
        if(!file_exists($this->rutaArchivo)){
            return [];
        }

        // Generamos el array de notas
        $notas = [];

        // 2. Leemos cada linea del fichero
        $lineas = file($this->rutaArchivo);
        
        // 3. Por cada lineas ignoramos las lineas vacias y creamos una nota
        foreach ($lineas as $linea) {
            // Ignoramos las líneas vacías
            if (trim($linea) === '') {
                continue;
            }
            // Creamos una nota con Nota::desdeLinea($linea);
            $nota = Nota::desdeLinea($linea);

            $notas[] = $nota; // Agregamos la nota al array 
        }
            // 4. Devolvemos el array de notas
            return $notas;
    }

    // Generamos una función que nos agrege tareas
    public function agregar(Nota $nota){ // El Nota $nota, sirve para indicar que la variable nota proviene de la clase Nota
        // 1. Creamos la linea
        $linea = $nota->aLinea() . "\n";
        // 2. Escribimos el resultado del fichero
        $resultado = file_put_contents($this->rutaArchivo, $linea, FILE_APPEND);
        // 3. Si devuelve false, lanzar excepción
        if ($resultado === false) {
            throw new Exception("No se pudo escribir en notas.txt");
        }
    }
}
?>