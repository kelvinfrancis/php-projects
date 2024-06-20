<?php
// Iniciamos sesión
session_start();
print_r($_SESSION);
if (empty($_SESSION["nVisitas"])) {
    $_SESSION["nVisitas"] = 1;
}else {
    # code...
    $_SESSION["nVisitas"]++;
}
echo "<h3>Hola, esta es la vez numero: ".$_SESSION["nVisitas"]."</h3>";

// Al llegar a 5 visitas, destruimos la sesion
if ($_SESSION["nVisitas"] >= 5) {
    session_destroy();
}
?>
<br>
<form action="sesion03.php" method="post">
    <input type="submit" value="Enviar">
</form>