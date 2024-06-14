<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas Básicas</title>
</head>
<body>
    <h1>Práctica No. 2</h1>
    <h2>1. Número Primo</h2>
    <form action="functions.php" method="post">
        <label for="primo">Número: </label>
        <input type="number" name="primo" id="primo">
        <input type="submit" value="Comprobar" name="btn_primo">
    </form>
    <h2>2. Sucesión Fibonacci</h2>
    <form action="functions.php" method="post">
        <label for="fibo">Número: </label>
        <input type="number" name="fibo" id="fibo">
        <input type="submit" value="Sucesión" name="btn_fibo">
    </form>
    <h2>3. Factorial</h2>
    <form action="functions.php" method="post">
        <label for="facto">Número: </label>
        <input type="number" name="facto" id="facto">
        <input type="submit" value="Calcular" name="btn_facto">
    </form>
</body>
</html>