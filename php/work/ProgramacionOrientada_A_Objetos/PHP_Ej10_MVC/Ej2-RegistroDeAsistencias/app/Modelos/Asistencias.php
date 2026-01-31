<?php
// Generamos la clase
class Asistencias{
    public $id;
    public $nombre;
    public $asiste;
    public $fecha;

    // Generamos las funciones
    // Función que convierte el registro de asistencia a una linea
    public function unalinea(){
        return $this->id . "|" . $this->nombre. "|" . $this->fecha . "|" . $this->asiste;
    }

    // Función que comprueba si esta todo correcto y si lo esta devuelve montada la asistencia
    public static function desdeLinea($linea){ // Esta función tiene que ser estatica
        // 1. Quitamos las | y los espacios, y comprobamos que tienen los 4 paramentros
        $partes = explode("|", trim($linea));
        if(count($partes) !== 4){
            throw new Exception("Linea corrupta en tareas.txt: " . $linea);
        }

        // 2. Ponemos la comprobación de que si asiste no es SI o NO, de error
        $valorAsistencia = $partes[3];
        if($valorAsistencia != "SI" && $valorAsistencia != "NO"){ // Genera un error si no es SI o NO
            throw new Exception("La asistencia solo puede ser SI o NO");
        }
        // 3. Montaje de la ficha: Creamos una nota nueva y le asignamos cada trozo a su lugar correspondiente (0 es el primero, 1 el segundo y 2 el tercero).
        $asistencia = new Asistencias();
        $asistencia->id = $partes[0];
        $asistencia->nombre = $partes[1];
        $asistencia->fecha = $partes[2];
        $asistencia->asiste = $partes[3];
        
        // 4. Devolvemos la tarea
        return $asistencia;
    }
}
?>