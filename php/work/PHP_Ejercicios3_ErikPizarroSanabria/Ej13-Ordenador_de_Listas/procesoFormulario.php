    <?php
    // Sacamos la lista del formulario
    $listaNumeros = $_POST['lista'];

    // Convertimos la lista a separada por comas
    $listaFinal = explode(",", $listaNumeros);

    // Ordenamos la lista
    sort($listaFinal);

    // Mostramos la lista Ordenada
    echo "<ol>";
    foreach($listaFinal as $numero){
        echo "<li> $numero </li>";
    }
    echo "</ol>";
    ?>