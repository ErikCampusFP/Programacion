<?php
// Generamos la clase
class Login{
    // Generamos los atributos
    public $usuario;
    public $password;
    // Generamos un constructor
    public function __construct($usuario, $password)
    {
        $this->usuario = $usuario;
        $this->password = $password;
    }
    // Generamos el metodo
    public function comprobar(){
        if($this->password == 1234){
            echo "Acceso concedido a $this->usuario" . "<br>";
        } else {
            echo "Contraseña Incorrecta". "<br>";
        }
    }
}
?>