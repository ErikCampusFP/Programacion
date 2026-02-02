<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tareas Personales</h1>
    <!-- Enlace para listar Tareas -->
    <a href="index.php?accion=listar">Lista Tareas</a>

    <!-- Enlace para Crear Tareas -->
    <a href="index.php?accion=crear">Crear Tareas</a>

    <!-- hr genera una linea que permite separar cosas en el html -->
    <hr> 
    
    <!-- Hueco para la vista -->
    <?php require $vistaContenido; ?>

</body>
</html>