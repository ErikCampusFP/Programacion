<?php
// Generamos la clase Nota
class Nota{
    public $id;
    public $texto;
    public $fecha;

    // Convertir la nota a una línea
    public function alinea(){
        return $this->id . "|" . $this->texto . "|" . $this->fecha;
    }

    // Crea una Nota desde una línea del fichero
    public static function desdeLinea($linea) {
        $partes = explode('|', trim($linea)); // Quitamos espacio de lineas

        if (count($partes) !== 3) {
            throw new Exception("Línea corrupta en notas.txt: " . $linea); // Si se reciben más de tres parametros, damos un error
        }
        // Generamos la nueva nota
        $nota = new Nota();
        $nota->id = $partes[0];
        $nota->texto = $partes[1];
        $nota->fecha = $partes[2];

        return $nota; // Devolvemos la nota 
    }
}
?>