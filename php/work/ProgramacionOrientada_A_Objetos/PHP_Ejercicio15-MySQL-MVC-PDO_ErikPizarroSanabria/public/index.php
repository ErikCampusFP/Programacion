<?php
// public/index.php

// Registramos errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../app/controladores/ControladorAlumnos.php';


// Iniciamos controlador
$controlador = new ControladorAlumnos();
$accion = $_GET['accion'] ?? 'listar';

// Iniciamos el switch case
switch ($accion){
    case 'borrar':
        $controlador->borrar();
        break;

    case 'listar':
        $controlador->listar();
        break;
    
    case 'borrado':
        $controlador->borrado();
        break;

    default:
        echo 'Acción no valida';
}
?>
