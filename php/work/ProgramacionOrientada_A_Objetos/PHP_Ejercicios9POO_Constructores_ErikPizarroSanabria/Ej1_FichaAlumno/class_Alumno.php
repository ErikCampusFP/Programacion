<?php
// Creamos la clase Alumno
class Alumno{
    // Generamos los atributos
    public $nombre;
    public $curso;
    // Generamos el constructo
    public function __construct($nombre, $curso)
    {
        $this->nombre = $nombre;
        $this->curso = $curso;
    }
    // Generamos un metodo
    public function presentarse(){
        echo "Soy $this->nombre y estudio $this->curso";
    }
}
?>