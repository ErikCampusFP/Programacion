<?php
// app/Modelos/ConexionBD.php

// Creamos la clase
class ConexionBD {
    private static $conexion = null;

    public static function obtenerConexion(){
        if (self::$conexion === null){
            // Ponemos los datos de la Base de Datos
            $host = 'localhost';
            $baseDatos = "formacion";
            $usuario = "root";
            $password = "curso";

            try {
                $dsn = "mysql:host=$host;dbname=$baseDatos;charset=utf8mb4";
                self::$conexion = new PDO($dsn, $usuario, $password);

                // Hace que los errores SQL lancen excepciones
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){
                die("Error de conexion con la base de datos");
            }

            return self::$conexion;
        }
    }
}
?>