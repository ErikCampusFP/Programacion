<?php
// Creamos la clase
class ConexionBD {
    private static $conexion = null;

    public static function obtenerConexion() {
        if (self::$conexion === null) {

            $host = "localhost";
            $baseDatos = "centro";
            $usuario = "root";
            $password = "curso";

            try {
                $dsn = "mysql:host=$host; dbname=$baseDatos; charset=utf8mb4";
                self::$conexion = new PDO($dsn, $usuario, $password);

                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                $mensaje = date("Y-m-d H:i:s") . " Error, base de datos no existente. " . $e->getMessage() . PHP_EOL;
                file_put_contents(__DIR__ .  '/../../storage/errores.log', $mensaje, FILE_APPEND);

                die("Error de conexión con la base de datos");
            }
        }
        return self::$conexion;
    }
}
?>