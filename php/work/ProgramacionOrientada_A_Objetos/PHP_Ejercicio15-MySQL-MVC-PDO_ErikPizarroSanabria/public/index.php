<?php
// Registramos errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Iniciamos controlador
$controlador = new ControladorAlumnos();
$accion = $_GET['accion'] ?? 'crear';

// Iniciamos el switch case
switch ($accion){
    case 'actualizar':
        $controlador->actualizar();
        break;
    default:
        echo 'Acción no valida';
}
?>