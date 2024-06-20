<?php
# 6. $_SESSION: Es un array asociativo que se utiliza para guardar las sesiones del navegador.

session_start(); // Iniciar la sesión o recuñar una existente

/* IMPORTANTE: la función session_start() debe ser lo primero en el documento, debe estar antes de cualquier etiqueta HTML. */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <h1>Sesiones en PHP</h1>
    <p>LAs sesiones son una forma sencilla de almacenar datos para un usuario haciendo uso de ID de sesión único.</p>
    <p>Esto se puede usar para hacer persistente la información de estado entre peticiones de paginas.</p>
    <p>La ausencia de un ID de sesión permite saber a PHP que debe crear una nueva sesión generando un nuevo ID de sesión.</p>
    <a href="https://www.php.net/maunal/es/ref.session.php">Manual de PHP</a>
</body>
</html>

<?php
// Guardar valores de la sesión en la Superglobals $_SESSION
$_SESSION["usuario"] = "Kelvin";
$_SESSION["hobby"] = "Programador";
$_SESSION["inicio"] = time();

echo "<p>Sesión iniciada: ".$_SESSION["inicio"]."</p>";
echo "<p>Sesión iniciada: ".date("d/m/Y H:i:s",$_SESSION["inicio"])."</p>";
echo "<p>Sesión iniciada: ".$_SESSION["usuario"]."</p>";
print_r($_SESSION);

// Vaciar o eliminar la sesión
session_unset();
session_destroy();
echo "<p>La sesion ha sido eliminada</p>";
print_r($_SESSION);
?>
<form action="sesion02.php" method="post">
    <input type="submit" value="Enviar">
</form>