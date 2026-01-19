<?php
// Generamos la clase CuentaBancaria
class CuentaBancaria{
    // Le generamos las propiedades
    public $titular;
    public $saldo;
    public $tipoDeCuenta;

    // Generamos el método depositar
    public function depositar($cantidadDeposito){
        $this->saldo = $this->saldo + $cantidadDeposito;
        echo "Se ha ingresado correctamente". "<br>";
    }
    
    // Generamos el metodo retirar
    public function retirar($cantidadRetiro){
        $this->saldo = $this->saldo - $cantidadRetiro;
        echo "Se ha retidaro exitosamente". "<br>";
    }

    // Generamos el metodo mostrarInfo
    public function mostrarInfo(){
        echo "Tu saldo es el siguiente: ". $this->saldo;
    }
}
?>