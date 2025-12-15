<?php
$numero = 8;

echo "<table border = '1;'>";

echo "<th colspan = '3;'><h3> Tabla del $numero </h3></th>";

for ($i = 1; $i <=10; $i++){
    $resultado = $numero * $i;
    echo "<tr>";
        echo "<td>$numero</td>"; 
        echo "<td>x</td>";
        echo "<td>$i = $resultado</td>";
    echo "</tr>";
}
echo "</table>"
?>