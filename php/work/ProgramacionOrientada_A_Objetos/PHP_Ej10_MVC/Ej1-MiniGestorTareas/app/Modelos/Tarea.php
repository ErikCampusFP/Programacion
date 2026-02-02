<?php
// Generamos la clase Tarea
class Tarea{
    public $id;
    public $texto;
    public $estado;
    public $fecha;

    // Generamos las funciones
    // Convertimos las tareas a una linea para almacenarlas
    public function unalinea(){
        return $this->id . "|" . $this->texto . "|" . $this->estado . "|" . $this->fecha;
    }

    // Comprobamos que este todo correcto, y si es el caso devolvemos la tarea, sino lanzamos excepción
    public static function desdeLinea($linea){
        // 1. Quitamos las | y los espacios, y comprobamos que tienen los 4 paramentros
        $partes = explode("|", trim($linea));

        if (count($partes) !== 4){
            throw new Exception("Linea corrupta en tareas.txt: " . $linea);
        }

        // 2. Montaje de la ficha: Creamos una nota nueva y le asignamos cada trozo a su lugar correspondiente (0 es el primero, 1 el segundo y 2 el tercero).
        $nota = new Tarea();
        $nota->id = $partes[0];
        $nota->texto = $partes[1];
        $nota->estado = $partes[2];
        $nota->fecha = $partes[3];

        // 3. Devolvemos la tarea
        return $nota;
    }

}
?>