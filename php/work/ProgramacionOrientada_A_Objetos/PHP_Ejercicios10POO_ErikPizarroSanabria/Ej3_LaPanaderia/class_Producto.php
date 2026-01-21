<?php
// Generamos la clase Producto como Padre
class Producto{
    // Generamos atributos
    public $nombre;
    public $precio;

    // Generamos el constructo del padre
    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

// Generamos la clase Pastel como Hija
class Pastel extends Producto{
    // Generamos atributos
    public $sabor;
    // Generamos el constructo
    public function __construct($nombre, $precio, $sabor)
    {
        parent::__construct($nombre, $precio); // Sacamos los valores del constructo Padre
        $this->sabor = $sabor;
    }
    // Generamos los metodos
    public function etiqueta(){
        echo "Pastel de sabor $this->sabor: $this->nombre - $this->precio €". "<br>";
    }
}
?>