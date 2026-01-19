<?php
// Sacamos variables del formulario
$cantidad = $_POST['cantidad'];
$eleccion = $_POST['metodo'];

// Generamos un switch con la elección
switch ($eleccion){
    // Caso Euro a Dólar
    case "A":
        $cambio = 1.174511;
        $cantidadFinal = $cantidad * $cambio;
        echo "$cantidad € equivalen a $cantidadFinal $";
        break;
    // Case Dólar a Euro
    case "B":
        $cambio = 1.174511;
        $cantidadFinal = $cantidad / $cambio;
        echo "$cantidad $ equivalen a $cantidadFinal €";
        break;
    // Caso Metros a Pies
    case "C":
        $cambio = 3.28084;
        $cantidadFinal = $cantidad * $cambio;
        echo "$cantidad metros equivalen a $cantidadFinal pies";
        break;
    // Caso Pies a Metros
    case "D":
        $cambio = 3.28084;
        $cantidadFinal = $cantidad / $cambio;
        echo "$cantidad pies equivalen a $cantidadFinal metros";
        break;
}
?>