<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive Numbers</title>
</head>

<body>
    <!--Determinar si un numero es positivo-->
    <form action="" method="post">
        <label for="num">Ingrese un numero: </label><input type="number" name="num" id="num01">

        <input type="submit" value="validar" name="btn_01">
    </form>
</body>

</html>
<?php
if (isset($_POST["btn_01"])) {
    $num = $_POST["num"];
    if ($_POST["num"] > 0) {
        echo "El numero $num es positivo.";
    } else {
        echo "El numero $num es negativo.";
    }
}
?>