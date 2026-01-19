<?php
    // Array usuarios
    $usuarios = [
        ["usuario" => "Carlos", "clave" => "carlitos1243"],
        ["usuario" => "Maria", "clave" => "521478"],
        ["usuario" => "Jesus", "clave" => "Jesulito24"]
    ];
    $bandera = false;

    // Sacamos los datos del formulario
    $user = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Comprobación de si el usuario y contraseña son correctos.
    foreach ($usuarios as $value){
        if ($user == $value["usuario"] && $clave == $value["clave"]){
            $bandera = true;
        }
    };

    // Comprobación de si bandera esta en true o en false
    if($bandera == true){
        echo "<p style='color: green;'>Bienvenido al sistema, $user</p>";
    } else{
        echo "<p style='color: red;'>Acceso denegado</p>"; 
    };
    
?>