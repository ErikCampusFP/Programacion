<?php
// Accedemos al controlador
require_once __DIR__ .'/../app/Controladores/ControladorAsistencias.php';

// Creamos el controlador
$controlador = new ControladorAsistencias();

// Toma el valor que llega por la URL en accion y lo guarda en $accion, y si no llega nada, usa "listar" como valor por defecto.
$accion = $_GET['accion'] ?? 'listar';

// Generamos el switch
switch ($accion) {
  case 'listar':
    // llamar a listar()
    $controlador->listar();
    break;

  case 'crear':
    // llamar a crear()
      $controlador->crear();
    break;

  case 'guardar':
    // llamar a guardar()
      $controlador->guardar();
    break;

  default:
    echo "Acción no válida";
}
?>