<?php
// Accedemos al controlador
require_once __DIR__ . '/../app/Controladores/ControladorTareas.php';

// Creamos el controlador
$controlador = new ControladorTareas();

// Toma el valor que llega por la URL en accion y lo guarda en $accion, y si no llega nada, usa "listar" como valor por defecto.
$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'listar':
        // Listamos las tareas
        $controlador -> listar();
        break;
    case 'crear':
        // Muestra el formulario
        $controlador -> crear();
        break;
    case 'guardar':
        // Guarda la tarea
        $controlador-> guardar();
        break;
    default:
        echo "Acción no valida";
};
?>