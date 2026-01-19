<?php
// Sacamos los datos del formulario
$objetivoVentas = $_POST['objetivoVentas'];
$ventasActuales = $_POST['ventasActuales'];
// Sacamos el resultado final
$resultadoVentas = ($ventasActuales * 100)/$objetivoVentas;
$resultadoVentas = round($resultadoVentas); // Lo convertimos en entero
// Generamos lo que va a ver el usuario 
echo '<div style="background-color: gray; width: 100%; height: 40px; border-radius: 4px; display: flex; align-items: center; justify-content: center;">';
    echo '<div style="background-color: green; width: ' . $resultadoVentas . '%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">';
        echo $resultadoVentas . '%';
    echo '</div>';
echo '</div>';
?>