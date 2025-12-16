    <?php

    $filas = $_POST['tr'];
    $columnas = $_POST['td'];

    // Generamos la tabla
    echo '<table border="1">';
    // Le decimos que mientras el contador no sea igual al numero de filas, genere un tr
    for ($contador = 0; $contador != $filas; $contador ++){
        
        echo '<tr>';
        // Le decimos que mientras que cont no sea igual al numero de columnas genere un td con el contenido de cont
        for($cont = 0; $cont != $columnas; $cont ++){
            echo '<td>'."Fila: $contador | Columna  :   $cont".'</td>';
        };
        echo '</tr>';
    }
    echo '</table>';
    ?>