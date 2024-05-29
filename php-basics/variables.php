<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants</title>
</head>

<body>
    <h1>Declaración de Variables en PHP</h1>
    <?php
    // Variables son invocadas con el símbolo de dolar
    $nombre = "Booker T";
    $apellido = "Champion";
    echo "Mi nombre es: $nombre $apellido <br>";
    echo "El mejor del mundo.";
    $code = 224;
    echo "Mi código es: $code";
    ?>
    <h2>Constantes en PHP</h2>
    <?php
    # No llevan el símbolo de $, se utiliza la función define() para crearlas.
    define("PI", 3.14);
    echo "Constante PI: ", PI;
    // Calcular el area de un circulo donde radio = 2. El area sera PI por 4.
    echo "<br>Area: ", PI * 4;

    ?>
</body>

</html>