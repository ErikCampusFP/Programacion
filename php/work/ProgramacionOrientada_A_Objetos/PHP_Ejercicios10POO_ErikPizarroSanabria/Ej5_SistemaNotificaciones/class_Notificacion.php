<?php
// Generamos la clase
class Notificacion{
    // Generamos atributos
    public $mensaje;
    // Generamos el constructo
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }
    // Generamos un metodo
    public function enviar(){
        echo "Enviando: $this->mensaje". "<br>";
    }
}
// Generamos la clase
class Email extends Notificacion{
    // Generamos atributos
    public $destinatario;
    // Generamos el constructo
    public function __construct($mensaje, $destinatario)
    {
        parent::__construct($mensaje); // Recibimos el construct del padre
        $this->destinatario = $destinatario;
    }
    // Generamos un metodo
    public function enviar()
    {
        echo "Para: $this->destinatario"."<br>";
        parent::enviar();
    }
}
?>