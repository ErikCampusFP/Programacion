<?php
// Accedemos a ControladorNotas.php
require_once __DIR__ . '/../app/Controladores/ControladorNotas.php';
// Crear el controlador
$controlador = new ControladorNotas();

$accion = $_GET['accion'] ?? 'listar'; // Comprobamos el resultado del formulario

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