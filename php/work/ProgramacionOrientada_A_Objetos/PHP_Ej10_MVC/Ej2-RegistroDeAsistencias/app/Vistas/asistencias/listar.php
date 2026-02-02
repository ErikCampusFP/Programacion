<?php
// Mostramos si existe el error
if (!empty($error)){
    echo htmlspecialchars($error);
};

echo "<h2>Listar Notas</h2>";

if (empty($asistencias)) {
    echo "No hay notas";
} else {
    echo '<table border="1" cellpadding="5">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre Alumno</th>";
    echo "<th>Fecha</th>";
    echo "<th>Se encuentra en clase</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($asistencias as $a) {
        echo "<tr>";
        echo '<td>' . htmlspecialchars($a->nombre) . '</td>';
        echo '<td>' . htmlspecialchars($a->fecha) . '</td>';
        echo '<td>' . htmlspecialchars($a->asiste) . '</td>';
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>