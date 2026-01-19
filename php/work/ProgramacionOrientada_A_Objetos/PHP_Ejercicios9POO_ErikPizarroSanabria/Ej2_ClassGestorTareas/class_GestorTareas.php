<?php
// Generamos la clase tarea
class tarea{
    // Le generamos las propiedades
    public $nombre;
    public $descripcion;
    public $fechalimite;
    public $estado = "Pendiente";


    // Generamos el metodo marcarComoCompletada
    public function marcarComoCompletada(){
        $this->estado = "Completado";
    }

    // Generamos el metodo editarDescripción
    public function editarDescripcion($nuevaDescripcion){
        $this->descripcion = $nuevaDescripcion;
    }

    // Generamos el metodo mostrarTarea
    public function mostrarTarea(){
        echo "Nombre: ". $this->nombre . "<br>";
        echo "Descripcion: ". $this->descripcion. "<br>";
        echo "FechaLimite: ". $this->fechalimite. "<br>";
        echo "Estado: ". $this-> estado. "<br><br>";
    }
}
?>