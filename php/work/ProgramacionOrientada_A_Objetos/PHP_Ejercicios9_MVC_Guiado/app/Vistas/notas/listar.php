<?php
// Mostramos si existe el error
if (!empty($error)){
    echo htmlspecialchars($error);
};

echo "<h2>Listar Notas</h2>";

if (empty($notas)) {
    echo "No hay notas";
} else {
    echo '<table border="1" cellpadding="5">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>Fecha</th>";
    echo "<th>Texto</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($notas as $n) {
        echo "<tr>";
        echo '<td>' . htmlspecialchars($n->fecha) . '</td>';
        echo '<td>' . htmlspecialchars($n->texto) . '</td>';
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>