<?php
// public/index.php

// Marcamos los errores
ini_set('dislplay_errors', 1);
error_reporting(E_ALL);

// Generamos las conexiones necesarias
require_once(__DIR__ . '/../app/Controladores/ControladorAlumnos.php');

// Generamos un objeto de la clase controlador
$controlador = new ControladorAlumnos();
$accion = $_GET['accion'] ?? 'listar';

switch($accion){
    case 'listar':
        $controlador->listar();
        break;
    
    case ('actualizar'):
        $controlador->actualizar();
        break;
    
    case ('formularioAct'):
        $controlador->formularioAct();
        break;
        
    case 'actualizado':
    $controlador->actualizado();
    break;
    
    default:
        echo "Acción no valida, pruebe de nuevo";
}
?>