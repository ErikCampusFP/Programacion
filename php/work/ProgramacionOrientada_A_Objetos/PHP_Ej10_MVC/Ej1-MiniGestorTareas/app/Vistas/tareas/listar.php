<?php
// Mostramos si existe el error
if (!empty($error)){
    echo htmlspecialchars($error);
};

echo "<h2>Listar Notas</h2>";

if (empty($tareas)) {
    echo "No hay notas";
} else {
    echo '<table border="1" cellpadding="5">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>Fecha</th>";
    echo "<th>Texto</th>";
    echo "<th>Estado</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($tareas as $t) {
        echo "<tr>";
        echo '<td>' . htmlspecialchars($t->fecha) . '</td>';
        echo '<td>' . htmlspecialchars($t->texto) . '</td>';
        echo '<td>' . htmlspecialchars($t->estado) . '</td>';
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>