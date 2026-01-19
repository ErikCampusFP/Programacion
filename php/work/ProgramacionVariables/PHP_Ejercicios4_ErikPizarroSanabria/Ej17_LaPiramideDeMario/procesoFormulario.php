<?php
// Sacamos el valor del formulario
$altura = $_POST ["altura"];
// Generamos un contador
$contador = 1;
// Hacemos que se genere una linea hasta llegar a la altura solicitada
while ($contador != $altura + 1){
    echo "Fila $contador: ";
    // Hacemos un bucle para que se genere el numero de asteriscos igual a el numero de la fila
    for($i = 0; $i != $contador; $i++){
        echo "*";
    };
    echo "<br>";
    $contador++;
}
?>