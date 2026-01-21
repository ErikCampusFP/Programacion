<?php
// Generamos la clase persona
class Persona{
    // Generamos los atributos
    public $nombre;
    public $edad;
}

// Generamos la clase hijo
class Estudiante extends Persona{
    // Generamos el atributo
    public $curso;
    // Generamos el constructo
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    // Generamos el metodo que muestra los datos del estudiante
    public function mostrarDatos(){
        echo "$this->nombre, de $this->edad años, del curso $this->curso". "<br><br>";
    }
}
?>