<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 01</title>
</head>

<body>
    <h1>Práctica 01</h1>
    <!--1. Dados dos números a y b calcular:
        - Suma, resta, multiplicación y division de los valores.
        - Divide a entre b y muestra el resto o residuo de la division
        - Crear dos variables de tipo string o cadena y concaténalas
        - Incrementa el valor de a en 1
        - Decrementa el valor de b en 1
        - Calcula (a + b) al cuadrado-->
    <h2>1. Dados dos números a y b calcular:</h2>
    <form action="" method="post">
        <label for="valorA">Número A: </label>
        <input type="number" name="valorA" id="A">

        <label for="valorB">Número B: </label>
        <input type="number" name="valorB" id="B">

        <input type="submit" value="Calcular" name="submit_btn">
    </form>
    <?php
    # -------------- Parte 1 -----------------
    if (isset($_POST['submit_btn'])) {
        $a = $_POST['valorA'];
        $b = $_POST['valorB'];

        echo "<hr>El valor de A es <b>$a</b>, y B es <b>$b</b><br>";
        echo "Suma: $a + $b = <b>" . $a + $b . "</b><br>";
        echo "Resta: $a - $b = <b>" . $a - $b . "</b> <br>";
        echo "Multiplicación: $a * $b = <b>" . $a * $b . "</b> <br>";
        echo "Division: $a / $b = <b>" . $a / $b . "</b> <br>";
        echo "<hr>Residuo de la división: $a % $b <b>" . $a % $b . "</b> <br>";
        // Concatenación
        $string1 = "Don PEPE AKA ";
        $string2 = "El Mejor";
        echo "<hr>String 1 y String 2 concatenado es <b>" . $string1 . $string2 . "</b><br>";

        $a++;
        echo "<hr>Valor de A incrementado + 1: <b>$a</b><br>";
        $b--;
        echo "<hr>Valor de B Decrementa - 1: <b>$b</b><br>";

        // Elevado al cuadrado
        echo "<hr> ($a + $b) elevado al cuadrado: <b>" . pow($a + $b, 2) . "</b>";
    }
    ?>
    <hr>
    <!--2. Dado el importe de una factura calcular:
        - El descuento (10%)
        - El IVA (21%)
        - El subtotal
        - El total a pagar
        - Muestra los resultados e una tabla-->
    <h2>2. Dado el importe de una factura calcular:</h2>
    <form action="" method="post">
        <label for="importe">Importe de factura: </label><input type="number" name="importe" id="importe" min="1">
        <input type="submit" value="Calcular" name="submit_btn2">
    </form>
    <?php
    # -------------- Parte 2 -----------------
    if (isset($_POST['submit_btn2'])) {
        $importe = $_POST['importe'];
        $descuento10 = $importe * 0.10;
        // Sub-total = importe - descuento
        $subTotal = $importe - $descuento10;
        // IVA (21%)
        $IVA = $subTotal * 0.21;
        $total = $subTotal - $IVA;

        echo "<hr>
        <table border=1 style='width: 50%; margin: auto;'>
            <caption>Factura de consumo</caption>
            <tr>
                <th>Desglose</th>
                <th>Monto</th>
            </tr>
            <tr>
                <td>Importe</td>
                <td>$ $importe</td>
            </tr>
            <tr>
                <td>Descuento(10%)</td>
                <td>$ $descuento10</td>
            </tr>
            <tr>
                <td>IVA (21%)</td>
                <td>$ $IVA</td>
            </tr>
            <tr>
                <td>Sub-total </td>
                <td>$ $subTotal</td>
            </tr>
            <tr>
                <td><b>Total:</b></td>
                <td>$ <b>$total</b></td>
            </tr>
        </table>";
    }
    ?>
    <hr>
    <!--3. Dado 3 números, calcula el promedio.-->
    <h2>3. Dado 3 números, calcula el promedio.</h2>
    <form action="" method="post">
        <label for="num1">Numero 1: </label><input type="number" name="num1" id="num1">
        <label for="num1">Numero 2: </label><input type="number" name="num2" id="num2">
        <label for="num1">Numero 3: </label><input type="number" name="num3" id="num3">
        <input type="submit" value="Calcular promedio" name="submit_btn3">
    </form>
    <?php
    # -------------- Parte 3 -----------------
    if (isset($_POST['submit_btn3'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $suma = $num1 + $num2 + $num3;
        $promedio = $suma / 3;

        echo "<hr>El promedio de los números $num1, $num2 y $num3 es igual a <b>$promedio<b/>";
    }
    ?>
    <hr>
    <!--4. Dato el radio de un circulo, calcula:
        - El diámetro
        - El area
        - La circunferencia-->
    <h2>4. Dato el radio de un circulo, calcula:</h2>
    <form action="" method="post">
        <label for="radio">Ingrese el Radio del circulo: </label>
        <input type="number" name="radio" id="radio">

        <input type="submit" value="Calcular" name="submit_btn4">
    </form>
    <?php
    if (isset($_POST['submit_btn4'])) {
        define("PI",3.14);
        $radio = $_POST['radio'];
        $dMetro =  2 * $radio;
        $area = PI * ($radio ** 2);
        $circunferencia = 2 * PI * $radio;

        echo "<hr>Diámetro: <b>$dMetro</b><br>";
        echo "Area: <b>$area</b><br>";
        echo "Circunferencia: <b>$circunferencia</b>";
    }
    ?>
</body>

</html>