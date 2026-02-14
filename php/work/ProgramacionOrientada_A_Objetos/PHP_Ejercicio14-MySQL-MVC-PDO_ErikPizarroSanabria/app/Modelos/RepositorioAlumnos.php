<?php

    // Añadimos las conexiones
    require_once __DIR__ .'/ConexionBD.php';
    require_once __DIR__ .'/Alumno.php';

    // Generamos la clase
    class RepositorioAlumnos{

    // Creamos la función de insertar
    function insertar($alumno){

        $sql = "INSERT INTO alumnos (nombre, email, edad, fecha_creacion)
                VALUES (:nombre, :email, :edad, :fecha)";
        
        $conexion = ConexionBD::obtenerConexion(); // obtiene (o crea si no existe) la conexión a la base de datos para poder usarla en la inserción.
        $stmt = $conexion->prepare($sql); // Preparamos la acción
        $stmt->execute([ // Ejecutamos la acción
            ':nombre' => $alumno->nombre, // Indicamos que lo insertado son los valores de la clase alumno
            ':email' => $alumno->email,
            ':edad' => $alumno->edad,
            ':fecha' => $alumno->fechaCreacion
        ]);
    }
    }
?>