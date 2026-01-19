<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Generamos el titulo -->
    <h1 style="text-align:center;">Agenda (EJ31)</h1><br>

    <!-- Metemos los dos botones en una caja centrada -->
    <div style="text-align:center;">

        <!-- Creamos un botón que lleve a add_contact.php, el cual sea grande -->
        <a href="add_contact.php">
            <button style="font-size:20px; padding:30px; cursor: pointer;">1. Añadir contacto</button>
        </a>

        <br><br>
        
        <!-- Creamos un botón que lleve a list_agenda.php, el cual sea grande -->
        <a href="list_agenda.php">
            <button  style="font-size:20px; padding: 30px; cursor: pointer;">2. Listar agenda</button>
        </a>
    </div>
</body>
</html>