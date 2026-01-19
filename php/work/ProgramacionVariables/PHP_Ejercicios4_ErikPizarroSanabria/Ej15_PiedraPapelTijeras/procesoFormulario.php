    <?php
    // Sacamos la elección del usuario
    $eleccionUser = $_POST ["eleccion"];

    // Sacamos la elección de la CPU de forma aleatoria y la convertimos en una de las opciones
    $eleccionCPU = rand(0,2);
    if ($eleccionCPU == 0) {
        $eleccionCPU = "piedra";
    } elseif ($eleccionCPU == 1) {
        $eleccionCPU = "papel";
    } else {
        $eleccionCPU = "tijeras";
    };

    // Generamos el resultado de las elecciones con emojis
    // User
    if ($eleccionUser == "piedra"){
        $resultadoUser = "🪨";
    } elseif ($eleccionUser == "papel"){
        $resultadoUser = "📄";
    } else {
        $resultadoUser = "✂️";
    };
    // CPU
    if ($eleccionCPU == "piedra"){
        $resultadoCPU = "🪨";
    } elseif ($eleccionCPU == "papel"){
        $resultadoCPU = "📄";
    } else {
        $resultadoCPU = "✂️";
    };

    // Sacamos resulatdo
    echo "Jugador = $resultadoUser | CPU = $resultadoCPU"."<br><br>";

    if ($eleccionUser == $eleccionCPU){
        echo "<h1>Ha ocurrido un empate</h1>";
    } elseif ($eleccionUser == "piedra" && $eleccionCPU == "tijeras" OR $eleccionUser == "papel" && $eleccionCPU == "piedra" OR $eleccionUser == "tijeras" && $eleccionCPU == "papel"){
        echo "<h1>El ganador es el usuario con $resultadoUser</h1>";
    } elseif ($eleccionCPU == "piedra" && $eleccionUser == "tijeras" OR $eleccionCPU == "papel" && $eleccionUser == "piedra" OR $eleccionCPU == "tijeras" && $eleccionUser == "papel") {
        echo "<h1>El ganador es la CPU con $resultadoCPU</h1>";    
    };
    ?>