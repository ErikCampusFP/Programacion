<?php
// Hacemos que nos muestre todos los errores
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Generamos la función que compruebe si existe el archivo
function existeArchivo ($a){
    try {
        if (!file_exists("registros.txt")){
            throw new Exception("No existe el archivo");
        }
    } catch (Exception $excepcion){

    // Calculamos el numero de lineas que tiene para poner en el mensaje en la linea en la que se encunetra
    $lineas = 1;

    if (file_exists("errores.log")) { 
        $lineas = 0;

        if ($archivo = fopen("errores.log", "r")) {
            while (!feof($archivo)) {
                fgets($archivo);
                $lineas++;
            }
            fclose($archivo);
        }
    }
    // Generamos el mensaje de error y lo guardamos en errores.log
    $mensaje = date("Y-m-d H:i:s") . " | " . "EJ30" . " | " . $excepcion->getMessage(). " | " . "index.php" . " | " . "Linea: $lineas" . "\n";
    file_put_contents("errores.log", $mensaje, FILE_APPEND);
    echo 'No se pudo leer el archivo. Intentelo más tarde'; // Creamos un mensaje para avisar al usuario que no se a podido leer
    return $a  = false;
    }
    return $a = true;
}

// Creamos la función que compruebe si el registro es valido y si lo es lo añada
function lineaValida (){
    if (file_exists("registros.txt")) {
    $lineas = file("registros.txt");
    $b = 0;

    foreach ($lineas as $linea) {
        $b ++;
        $datos = array_map('trim', explode("|", $linea)); // Con esto volvemos cada linea de array en 5 diferentes

        // Si no tiene 5 campos, se salta y se marca como error la línea, ya que es el numero de campos que deben de tener todas
        if (count($datos) != 5) {
            $mensaje = date("Y-m-d H:i:s") . " | " . "Linea Erronea = $b" . "\n";
            file_put_contents("errores.log", $mensaje, FILE_APPEND);
            continue;
        }
        // Con solo las lineas validas, las añadimos a la tabla
        echo "<tr>";
        foreach ($datos as $dato) {
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
    }
}

// Creamos la variable que utilizaremos para saber si existe o no el archivo
$a = true;
$a = existeArchivo($a);

if($a == true){
    // Comprobamos si el archivo existe y si existe leemos todas sus lineas
    if (file_exists("registros.txt")) {
        $lineas = file("registros.txt");
    }
    // Creamos la tabla
    echo "<table border = 1>";
    echo "<tr>";
        echo "<th>Fecha</th>";
        echo "<th>Nombre</th>";
        echo "<th>Email</th>";
        echo "<th>Edad</th>";
        echo "<th>Mensaje</th>";
    echo "</tr>";

    // Utilizamos la función creada para eliminar lineas no validas y añadir solo las validas
    lineaValida();
};
?>