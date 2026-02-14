<?php
class ConexionBD{
    private static $conexion = null; // Generamos la conexión a la BD

    // Creamos la función estatica para comprobar la conexión
    public static function obtenerConexion(){
        if(self::$conexion === null){
            // Definimos los datos de los valores de la BD
            $host = "localhost";
            $baseDatos = "centro";
            $usuario = "root";
            $password = "curso";

            // Creamos la conexión con un try
            try{
                $dsn = "mysql:host=$host; dbname=$baseDatos; charset=utf8mb4"; // Conexión a la base de datos
                // Generamos el PDO (interfaz para acceder a una base de datos desde PHP)
                self::$conexion = new PDO($dsn, $usuario, $password);
                
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Si ocurre un error, la BD se lanza como excepción
            } catch (PDOException $e){

                $mensaje = date("Y-m-d H:i:s"). "Error, base de datos no existente". $e->getMessage() . PHP_EOL; //PHP_EOL es para que haya un salto de linea
                file_put_contents(__DIR__. '/../../storage/errores.log', $mensaje, FILE_APPEND);

                die("Error de conexión con la base de datos");

            }
        }

        return self::$conexion; // Si no es null, devolvemos la conexión

    }
}

?>