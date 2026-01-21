<?php
// Generamos la clase Empleado
class Empleado{
    // Generamos los atributos
    public $nombre;
    public $puesto;
    public $sueldo;
    // Generamos el Constructor
    public function __construct($nombre, $puesto, $sueldo)
    {
        $this->nombre = $nombre;
        $this->puesto = $puesto;
        $this->sueldo = $sueldo;
    }
    // Generamos el metodo
    public function revisarSueldo(){
        if($this->sueldo < 1000){
            $this->sueldo = $this->sueldo + 200;
            echo ("El sueldo de $this->nombre ha sido actualizado a $this->sueldo". "<br>");
        } else {
            echo ("El sueldo de $this->nombre el cual es el siguiente: $this->sueldo es correcto". "<br>");
        }
    }
}
?>