<?php
session_start(); // Inicio de Sesión
//session_unset();
$_SESSION["user"] = "bookerT";
$_SESSION["password"] = "1234";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login PHP</title>
</head>
<body>
    <h2>Formulario de login</h2>
</body>
</html>

<?php
if (empty($_SESSION["ingresar"])) {
    // Sesion por primera vez
    $_SESSION["ingresar"] = "";
}
if (isset($_POST["btn_login"])) {
    if ($_SESSION["ingresar"] == "no") {
        // Verificar datos de formulario
        if ($_SESSION["user"] == $_POST["user"] && $_SESSION["password"] == $_POST["pass"]) {
            // Acceso concedido
            $_SESSION["ingresar"] = "si";
        } else {
            // Acceso Denegado
            echo "<div class='login'><p class='error'> El usuario y/o la clave es incorrecta, favor intentarlo nuevamente.</p></div>";
        }
    }
}

if ($_SESSION["ingresar"] == "si") {
    echo "<p style='color: green;'>Bienvenido " . $_POST["user"] . "!</p>";
}else {
    $url = $_SERVER["REQUEST_URI"];

    // Formulario
print <<<FORM
<div id="login">
<form action="$url" method="post">
<label for="user">Usuario: </label>
<input type="text" name="user" id="usr">

<label for="pass">Contraseña: </label>
<input type="password" name="pass" id="pass">
<input type="submit" value="Ingresar" name="btn_login" id="btn">
</form>
</div>
FORM;
$_SESSION["ingresar"] = "no";
exit;
}
?>