<?php
// app/Modelos/RepositorioAlumnos.php

// Añadimos las conexiones necesarias
require_once __DIR__ . '/Alumno.php';
require_once __DIR__ . '/ConexionBD.php';

// Creamos la clase RepositorioAlumnos
class RepositorioAlumnos{
    // Función Borrar
    public function borrar($id){
        // Generamos el comando SQL
        $sql = "DELETE FROM alumnos WHERE id = :id";

        $conexion = ConexionBD::obtenerConexion();
        $stmt = $conexion->prepare($sql); // Preparamos la ejecución
        $stmt->execute([':id' => $id]); // Lo ejecutamos
    }

    // Función ObtenerTodos
    public function obtenerTodos(){
        $sql = "SELECT * FROM alumnos";

        $conexion = ConexionBD::obtenerConexion();
        $stmt = $conexion->prepare($sql); // Preparamos la ejecución
        $stmt->execute(); // Lo ejecutamos

        // Obtenemos todos los registros como objetos de tipo Alumno
        $alumnos = $stmt->fetchAll(PDO::FETCH_CLASS, 'Alumno'); 
        return $alumnos; // Devolvemos los registros
    }
}
?>