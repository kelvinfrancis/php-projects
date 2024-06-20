<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login con PHP</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usr">

        <label for="pass">Clave: </label>
        <input type="text" name="pass" id="pass">

        <input type="submit" value="Acceder" name="login">
    </form>
</body>
</html>
<?php
if (empty($_SESSION["usuario"])) {
    $_SESSION["usuario"] = "BookerTK";
    $_SESSION["password"] = 12345;
}
if (isset($_POST["login"])) {
    // Se ejecuta cuando hacemos click en el botón
    if (($_POST["usuario"] == $_SESSION["usuario"]) && ($_POST["pass"] == $_SESSION["password"])) {
        echo '<p>Bienvenido BookerTK</p>';
    }else{
        echo "<p>Usuario y/o clave incorrecta</p>";
    }
}
?>