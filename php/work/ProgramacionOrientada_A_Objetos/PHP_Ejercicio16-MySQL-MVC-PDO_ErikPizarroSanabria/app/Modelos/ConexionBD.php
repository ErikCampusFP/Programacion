<?php
// app/Controlador/ControladorBD

// Creamos la clase controladorBD
class ContexionBD{
    private static $conexion = null;

    // Creamos la función que obtenga la conexion
    public static function obtenerConexion(){
        if (self::$conexion === null){

        // Escribimos los datos de la base de datos
        $host = "localhost";
        $baseDatos = "centro";
        $usuario = "root";
        $password = "curso";

        try{
            $dsn = "mysql:host=$host;dbname=$baseDatos;charset=utf8mb4";
            self::$conexion = new PDO($dsn, $usuario, $password);

            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            // Creamos el mensaje de error y lo almacenamos 
            $mensaje = date("Y-m-d H:i:s") . "Error, base de datos no existente". $e->getMessage() . PHP_EOL;
            file_put_contents(__DIR__ . '/../../storage/errores.log', $mensaje, FILE_APPEND);

            die("Error de conexión con la base de datos");
        }

        }
        return self::$conexion;
    }
}
?>