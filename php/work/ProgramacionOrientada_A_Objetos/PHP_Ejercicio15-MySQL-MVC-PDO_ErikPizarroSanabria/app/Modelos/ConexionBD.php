<?php
// app/ Modelos/ConexionBD.php

// Creamos la clase
class ConexionBD {
    private static $conexion = null;

    // Creamos la función estatica obtenerConexion
    public static function obtenerConexion(){
        if(self::$conexion === null){
            // Definimos los datos de la BD
            $host = "localhost";
            $baseDatos = "centro";
            $usuario = "root";
            $password = "curso";

            // Intentamos la conexión
            try{
                $dsn = "mysql:host=$host; dbname=$baseDatos; charset=utf8mb4";
                self::$conexion = new PDO($dsn, $usuario, $password);
                // Escribimos que si ocurre un error, lo lance como excepción
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                // Generamos el mensaje del error y decimo que lo guarde en errores.log
                $mensaje = date("Y-m-d H:i:s"). " Error, base de datos no existente" . $e->getMessage() . PHP_EOL;
                file_put_contents(__DIR__ . '/../../storage/errores.log', $mensaje, FILE_APPEND);

                die("Error de conexión en la base de datos");
            }
        }
        return self::$conexion; // Devolvemos la conexión
    }
}
?>