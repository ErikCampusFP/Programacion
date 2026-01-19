<?php

class Mascota{
    public $nombre;
    public $tipo;

    // Metado para presentar la mascota
    public function presentar(){
        echo "Hola soy ". $this->nombre. " yo soy un(a) ". $this->tipo. "\n";
    }

    // Metodo para emitir un sonido
    public function emitirSonido(){
        if ($this->tipo == "perro"){
            echo "Guau, Guau \n";
        } elseif ($this->tipo == "gato") {
            echo "Miau, Miau\n";
        } else {
            echo "Este animal no tiene un sonido definido.\n";
        }
    }
}

?>