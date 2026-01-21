<?php
// Generamos la clase Producto
class Producto {
    public $descripcion;
    public $precioSinIVA;

    // Generamos el constructor
    public function __construct($descripcion, $precioSinIVA)
    {
        $this->descripcion = $descripcion;
        $this->precioSinIVA = $precioSinIVA;
    }

    // Generamos ell metodo
    public function precioFinal(){
        $precioFinal = ($this->precioSinIVA * 1.21);
        echo "El precio final es de $precioFinal €";
    }
}
?>