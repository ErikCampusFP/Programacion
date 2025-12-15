<?php
// Sacamos los datos del formulario
 $fondo = $_POST['fondo'];
 $tamañoLetra = $_POST['tamañoLetra'];
 $texto = $_POST['texto'];
 $alineacion = $_POST['alineacion'];

// Mostramos el resultado de lo elegido en el formulario
echo "<h1 style = 'background-color: $fondo; font-size: $tamañoLetra;  text-align: $alineacion';> $texto </h1>";
?>