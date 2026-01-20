<?php
// Generamos la clase Empleado
class Empleado {
    // Generamos las propiedades
    public $nombre;
    public $sueldo;
    public $aniosExperiencia;

    // Agregamos los metodos
    // Función Calcular Bonus
    public function calcularBonus() {
        $totalBonus = floor($this ->aniosExperiencia/ 2); // Usamos floor para que trunque
        $Bonus = ($this -> sueldo * 0.05) * $totalBonus;
        echo "Tu bonus es de $Bonus €"; 
    }
    // Función Mostrar Detalles
    public function mostrarDetalle() {
        echo "Nombre: ". $this->nombre. "<br>";
        echo "Sueldo: ". $this->sueldo. "<br>";
        echo "Años de Experiencia: ". $this->aniosExperiencia. "<br>";
    }

}

// Generamos la clase hijo
class Consultor extends Empleado{
    // Generamos la propiedad solicitada
    public $horasPorProyecto;

    // Reescribimos el metodo calcularBonus para añadir el extra
    public function calcularBonus() {
        $extra = false;
        $totalBonus = floor($this ->aniosExperiencia/ 2); // Usamos floor para que trunque
        $Bonus = ($this -> sueldo * 0.05) * $totalBonus;
        if ($this->horasPorProyecto > 100){
            $Bonus = $Bonus + 200;
            $extra = true;
        }
        if ($extra == false){
        echo "Tu bonus es de $Bonus €"; 
        } else {
            echo "Tu bonus es de $Bonus € contando con los 200 € extras";
        }
    }

}
?>