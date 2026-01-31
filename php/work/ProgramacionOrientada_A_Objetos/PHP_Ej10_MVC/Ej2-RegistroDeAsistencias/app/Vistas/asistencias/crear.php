<?php
// Mostramos el error si ocurre
if (!empty($error)):{
    echo "Ah ocurrido un error, intentelo más tarde";
}endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Generamos el formulario -->
    <form action="index.php?accion=guardar" method="POST">
        <h2>Registrar Asistencias</h2>    

        <label for="">Nombre Alumno</label><br>
        <!-- Lo del interior del textarea esto sirve para que si ocurre un error, lo que tenia escrito el usuario en el textarea se mantenga  -->        
        <textarea name="texto"><?php echo htmlspecialchars($antiguos['texto'] ?? ''); ?></textarea><br><br>

        <label for="">¿Se encuentra el alumno en clase?</label><br>

        <select name="asistencia" id="asistencia">
            <option value="SI" <?php echo ($antiguos['asistencia'] ?? '') === 'SI' ? 'selected' : ''; ?>>SI</option>
            <option value="NO" <?php echo ($antiguos['asistencia'] ?? '') === 'NO' ? 'selected' : ''; ?>>NO</option>
        </select><br><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>