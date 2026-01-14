<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Generamos el formulario -->
    <form action="" method="POST">
        <h1>Formulario Añadir Contacto</h1>
        <form action="" method="POST">
        <label for="">Introduce el Apodo</label>
        <input type="text" required name="nombre" minlength="3"> <br><br> 

        <label for="">Introduce el Email</label>
        <input type="text" required name="email"><br><br>

        <label for="">Introduce el telefono</label>
        <input type="tel" minlength="9" maxlength="9" name="telefono" require><br><br>

        <label for="">Introduce el nombrer de Instagram</label>
        <input type="text" required name="instagram" minlength="3"> <br><br>

        <input  type="submit" value="Enviar" ><br><br>

    </form>
    <!-- Bóton para salir al inicio -->
    <a href="./index.php"><button style= "cursor: pointer;">Volver al Inicio</button></a><br>

</body>
</html>

<?php
    // Hacemos que nos muestre todos los errores
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    // Generamos un comando para que el php, solo se ejecute cuando hemos enviado el formulario, evitandonos así errores que poderian saltar
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Generamos la función que compruebara si el formulario es correcto
        function comprobaFormulario ($a) { 
        // Comprobamos si el email posee el @
        try{
            $email = $_POST['email'];
            $longCont = strlen($email);
            $hayArroba  = false;

            for ($i = 0; $i < $longCont; $i++){
                if ($email[$i] === "@"){
                    $hayArroba = true;
                };
            };
            // Si no hay arroba, lanzamos la excepcion
            if ($hayArroba == false){
                throw new Exception("El email no posee una arroba");
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

            $mensaje = date("Y-m-d H:i:s"). " | " . "EJ31" . " | ".  $excepcion->getMessage(). " | " . "index.html" . " | ".  "Linea del Archivo de Error: $lineas". PHP_EOL;
            file_put_contents("errores.log", $mensaje, FILE_APPEND);
            echo '<p style= "color: red;">El email no posee un @, escribalo de nuevo</p>';
            return $a = false;
        };
        return $a = true;

        }
        // Generamos la variable $a y hacemos que sirva para saber si a ocurrido la excepción o no
        $a = true;
        $a = comprobaFormulario($a);

        if ($a == true){
            // Sacamos los datos del formulario
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono  =$_POST['telefono'];
            $instagram = $_POST['instagram'];


            
            // Añadimos el mensaje propuesto al archivo .txt
            $registro = $nombre . " | " . $email . " | " . $telefono . " | " . $instagram . "\n"; // Se puede utilizar \n o PHP_EOL para hacer un salto de linea
            file_put_contents("registros.txt", $registro, FILE_APPEND);
            // Mostramos al usuario un mensaje para avisarle que el guardado ha sido realizado correctamente
            echo '<p style= "color: green;">Registro Almacenado Correctamente</p>';
        }
            }
?>