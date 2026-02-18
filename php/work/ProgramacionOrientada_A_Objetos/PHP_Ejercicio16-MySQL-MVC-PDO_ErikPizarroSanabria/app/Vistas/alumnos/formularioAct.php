<!DOCTYPE html>
<html lang="es">
<head>
    <!-- app/Vistas/alumno/formularioAct.php -->
    <meta charset="UTF-8">
    <title>Editar Alumno</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <h2>Editar Alumno</h2>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form action="index.php?accion=actualizar" method="POST">

    <input type="hidden" name="id" value="<?= htmlspecialchars($alumno->id ?? '') ?>">


        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" 
                   value="<?= htmlspecialchars($alumno->nombre ?? '') ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" 
                   value="<?= htmlspecialchars($alumno->email ?? '') ?>">
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" 
                   value="<?= htmlspecialchars($alumno->edad ?? '') ?>">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php?accion=listar" class="btn btn-secondary">Volver</a>
    </form>
</div>
</body>
</html>