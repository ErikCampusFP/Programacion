<?php
// app/Vistas/layout.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Alumnos</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container py-4">

    <div class="bg-white p-4 rounded shadow-sm">
      <h1 class="h3 mb-3">Base de Datos Alumnos - Erik Pizarro Sanabria</h1>
    </div>
  </div>

<?php
    // Añadimos el require para las vista
    require $vistaContenido;
?>
</body>
</html>