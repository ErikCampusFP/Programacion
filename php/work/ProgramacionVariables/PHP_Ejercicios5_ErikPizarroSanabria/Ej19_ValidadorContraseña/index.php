<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <!-- Generamos Formularios -->
    <form action="index.php" method="POST">
        <label for="">Introduzca su Nombre de Usuario</label>
        <input type="text" name="user" required><br><br>

        <label for="">Introduzca su Contraseña</label>
        <input type="password" name="contraseña" required><br><br>

        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>

<?php
// Hacemos que solo aparezca el resultado del php cuando le damos al submit, con el comando isset que en este caso dice que hasta que no pongamos la contraseña, no nos aparecera
if (isset($_POST['contraseña'])) {
    // Recogemos la contraseña del formulario
    $contraseña = $_POST['contraseña'];
    $usuario = $_POST['user'];

    // Generamos las variables que diran si la contraseña es valida o no
    $errorLong = false;
    $errorCaracter = false;
    $errorIgualNombre = false;


    // Comprobamos que no sea más largo que 8
    // strlen saca la longitud del string
    $longCont = strlen($contraseña);
    if ($longCont < 8) {
        $errorLong = true;
    };

    // Comprobamos que no tiene ni @ ni
    for ($i = 0; $i < $longCont; $i ++){
        // Aquí indicamos que si la contraseña es igual a @ o a #
        if ($contraseña[$i] == "@" || $contraseña[$i] ==     "#"){
            $errorCaracter = true;
        };
    };

    // Comprobamos que no es igual al nombre
    if ($contraseña == $usuario){
        $errorIgualNombre = true;
    };

    // Mostramos si la contraseña no es valida
    if ($errorLong == true){
        echo '<div style= "color: red;">'. 'Contraseña no valida, longitud inferior a 8 </div>'. '<br>';
    }

    if ($errorCaracter == true){
        echo '<div style= "color: red;"> Contraseña no valida, prohibidos los caracteres @ y # </div>'. '<br>';
    }

    if ($errorIgualNombre == true) {
        echo '<div style= "color: red;"> Contraseña no valida, nombre usuario y contraseña iguales </div>'. '<br>';
    }

    // Mostramos si la contraseña es valida
    if ($errorLong == false and $errorCaracter == false and $errorIgualNombre == false){
        echo '<div style= "color: green;"> Contraseña Valida </div>';
    }
}
?>