<?php
// Generamos una clase
class Personaje{
    // Generamos atributos
    public $nombre;
    public $puntosdVida;

    // Generamos el constructo
    public function __construct($nombre, $puntosdVida)
    {
        $this->nombre = $nombre;
        $this->puntosdVida = $puntosdVida;
    }
}
// Generamos la clase hija
class Guerrero extends Personaje{
    // Generamos atributo
    public $arma;
    // Generamos el constructo
    public function __construct($nombre, $puntosdVida)
    {
        parent::__construct($nombre, $puntosdVida);
        $this->arma = "Espada";
    }
    // Generamos un metodo
    public function mostrarInfo(){
        echo "$this->nombre con $this->puntosdVida puntos de vida y posee el arma: $this->arma";
    }
}
?>