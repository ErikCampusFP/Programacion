<?php
// Creamos la clase
class Reloj{
    // Generamos el atributo
    public $marca;

    // Generamos el constructor
    public function __construct($marca)
    {
        $this->marca = $marca;
    }
}

// Creamos la clase hija
class SmartWatch extends Reloj{
    // Generamos el atributo
    public $sistemaOperativo;

    // Generamos el constructo del hijo, utilizando también el del padre
    public function __construct($marca, $sistemaOperativo)
    {
        parent::__construct($marca); // Con esto llamamos al constructo del padre, lo que nos permite utilizarlo
        $this->sistemaOperativo = $sistemaOperativo;
    }

    // Generamos un metodo
    public function mostrarDatos(){
        echo "Tengo un reloj $this->marca con sistema $this->sistemaOperativo". "<br>";
    }
}
?>