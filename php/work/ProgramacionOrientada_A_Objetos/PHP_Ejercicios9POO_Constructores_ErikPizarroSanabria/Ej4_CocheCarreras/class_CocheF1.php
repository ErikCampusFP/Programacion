<?php
// Creamos la clase
class CocheF1{
    // Generamos los atributos
    public $piloto;
    public $velocidad;
    // Generamos el constructor
    public function __construct($piloto)
    {
        $this->piloto = $piloto;
        $this->velocidad = 0;
    }
    // Generamos un metodo
    public function acelerar(){
        $this->velocidad = $this->velocidad + 20;
        echo "El coche de $this->piloto, ha aumentado la velocidad a $this->velocidad hm/h" . "<br>";
    }
}
?>