<?php
// public/index.php

// Inicializamos la visualización de los errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluimos el controlador
require_once __DIR__ .'/../app/Controladores/ControladorAlumnos.php';

// Creamos el controlador
$controlador = new ControladorAlumnos();

// Leemos la acción (si no viene, listar)
$accion = $_GET['accion'] ?? 'listar';

// Decidimos que hacer
switch($accion){
    
    // Opción Listar
    case 'listar':
        $controlador->listar();
        break;

    // Opción Crear
    case 'crear':
        $controlador->crear();
        break;
    
    // Opción Guardar
     case 'guardar':
        $controlador->guardar();
        break; 

    // Opción Borrar
    case 'borrar':
        $controlador->borrar();
        break;

    // Opción Predeterminada (la cual sale si no es ninguna de las otras)
    default:
        echo "Acción no valida";
}

?>