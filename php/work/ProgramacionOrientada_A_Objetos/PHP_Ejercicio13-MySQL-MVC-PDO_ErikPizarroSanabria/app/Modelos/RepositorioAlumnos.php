<?php

// Añadimos las conexiones
require_once __DIR__ .'/ConexionBD.php';
require_once __DIR__ .'/Alumno.php';

// Creamos la clase
class RepositorioAlumnos{
    private $conexion;

    function __construct()
    {
        $this->conexion = ConexionBD::obtenerConexion();
    }

    // CREATE: insertar alumno


    // READ: obtener todos
    function obtenerTodos(){
        $sql = "SELECT * FROM alumnos ORDER BY fecha_creacion DESC";
        $stmt = $this->conexion->query($sql);

        $alumnos = [];

        // Leemos fila por fila como array asociativo
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {

            // Convertimos el array asociativo en objeto Alumno
            $alumnos[] = new Alumno(
                $fila['id'],
                $fila['nombre'],
                $fila['email'],
                $fila['edad'],
                $fila['fecha_creacion']
            );
        }
        return $alumnos;
    }
}
?>