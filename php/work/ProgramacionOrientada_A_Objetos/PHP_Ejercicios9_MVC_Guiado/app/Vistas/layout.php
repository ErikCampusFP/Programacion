<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Notas Personales</h1>
    <!-- Enlace a Listar Notas -->
    <a href="index.php?accion=listar">Listar notas</a> 
    <!-- Enlace a Crear Nota -->
    <a href="index.php?accion=crear">Crear nota</a>

    <!-- hr genera una linea que permite separar cosas en el html -->
    <hr> 

    <!-- Hueco para la vista -->
    <?php require $vistaContenido; ?>
</body>
</html>