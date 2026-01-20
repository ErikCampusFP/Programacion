<?php
// Creamos la clase Personaje
class Personaje {
    // Generamos la propiedad
    public $nombre;
    public $nivel;
    public $puntosdVida;
    public $puntosdAtaque;

    // Agregamos los metodos
    // Función Atacar
    public function atacar(Personaje $objetivo){ // El parametro personaje antes de $objetivo, indica que $objetivo es un objeto de la clase Personaje
        $objetivo->puntosdVida = $objetivo->puntosdVida - $this -> puntosdAtaque;
        if ($objetivo->puntosdVida <=0){
            echo "El $this->nombre ataca al $objetivo->nombre y lo elimina" . "<br><br>";
            $objetivo->puntosdVida = 0;
            return $objetivo;

        } else {
            echo "El $this->nombre ataca al $objetivo->nombre y le deja a $objetivo->puntosdVida puntos de vida" . "<br><br>";
            return $objetivo;
        }
    }

    // Función Curarse
    public function curarse($curacion){
        $this->puntosdVida += $curacion;
        echo "Se han restaurado $curacion puntos de vida al jugador $this->nombre, ahora posee $this->puntosdVida puntos de vida" . "<br><br>";
        return $this; // Devolvemos $this para que se guarden los cambios en el jugador utilizado
    }

    // Función Subir de nivel
    public function subirNivel(){
        $this->nivel += 1;
        $this->puntosdVida += 5;
        $this->puntosdAtaque += 5;
        echo "El jugadr $this->nombre ha subido al nivel $this->nivel y ahora posee $this->puntosdVida puntos de vida y $this->puntosdAtaque puntos de ataque" . "<br>";
        return $this;
    }

    // Función Ver estadsticas
    public function verEstadisticas(){
        echo "Nombre: ". $this->nombre . "<br>";
        echo "Nivel: " . $this->nivel . "<br>";
        echo "Puntos de Vida: " . $this->puntosdVida . "<br>";
        echo "Puntos de Ataque: " . $this->puntosdAtaque . "<br>";
    }
}
?>