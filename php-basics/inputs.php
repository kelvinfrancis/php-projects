<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Entrada de datos</title>
    <!-- Librería Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2>Entrada de datos PHP</h2>
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="inpNombre">
            <input type="submit" name="btn" value="Enviar">
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['btn'])) { // Espera a que haga click en el botón
    echo $_POST['nombre']; // obtiene el valor escrito en el input
}

?>