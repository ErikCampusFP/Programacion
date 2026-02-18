<!DOCTYPE html>
<html lang="es">
<head>
    <!-- app/Vistas/alumno/listar.php -->
    <meta charset="UTF-8">
    <title>Alumnos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <h2 class="mb-3">Listado de Alumnos</h2>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if (empty($alumnos)): ?>
        <div class="alert alert-info">No hay alumnos todavía.</div>
    <?php else: ?>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $a): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($a->id); ?></td>
                        <td><?php echo htmlspecialchars($a->nombre); ?></td>
                        <td><?php echo htmlspecialchars($a->email); ?></td>
                        <td><?php echo htmlspecialchars($a->edad); ?></td>
                        <td>
                        <a href="index.php?accion=formularioAct&id=<?= $a->id ?>" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>