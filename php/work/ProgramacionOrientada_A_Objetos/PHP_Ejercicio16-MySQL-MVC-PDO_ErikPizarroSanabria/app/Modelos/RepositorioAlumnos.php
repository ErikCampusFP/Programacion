<?php
// app/Modelos/RepositorioAlumnos.php

// Añandimos las conexiones necesarias
require_once __DIR__ . '/ConexionBD.php';
require_once __DIR__ . '/Alumno.php';

// Generamos la clase
class RepositorioAlumnos{

    // Hacemos la función para mostrar los alumnos
    public function listar(){
        $sql = "SELECT * FROM alumnos"; // Escribimos la consulta que queremos que se haga
        $conexion = ContexionBD::obtenerConexion(); // Obtenemos la conexion de la base de datos

        $stmt = $conexion->prepare($sql); // Preparamos el lanzamiento de la consulta
        $stmt->execute(); // Ejecutamos la consultado

        $alumnos = $stmt->fetchAll(PDO::FETCH_CLASS, 'Alumno'); // Convertimos el resultado de la consulta en un objeto de la clase Alumnos
        return $alumnos; // Devolvemos los alumnos
    }

    // Hacemos una función para obtener el id de los alumnos
    public function obtenerPorId($id){
        $sql = "SELECT * FROM alumnos WHERE id = :id"; // Escribimos la consulta que queremos que se haga
        $conexion = ContexionBD::obtenerConexion(); // Obtenemos la conexion de la base de datos
        
        $stmt = $conexion->prepare($sql); // Preparamos el lanzamiento de la consulta
        $stmt->execute([':id' => $id]); // Ejecutamos la consultado
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Alumno');
        return $stmt->fetch(); // Devuelve un Alumno o null
    }


    // Hacemos la función para actualizar un alumnos
    public function actualizar($alumno){
        $sql = "UPDATE alumnos SET nombre = :nombre, email = :email, edad = :edad, fecha_creacion = :fecha_creacion WHERE id = :id"; // Escribimos la consulta que queremos que se haga
        $conexion = ContexionBD::obtenerConexion(); // Obtenemos la conexion de la base de datos

        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':nombre'=> $alumno->nombre,
            ':email' => $alumno->email,
            ':edad' => $alumno->edad,
            ':fecha_creacion' => $alumno->fecha_creacion,
            ':id' => $alumno->id
        ]);
    }
}
?>