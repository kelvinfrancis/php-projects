<?php

/**-----------------------------------------------------------------------
 * Las variables super-globales de PHP, siempre están disponibles en todos los ámbitos. Son: $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_COOKIE, $_SESSION, $_ENV
 -----------------------------------------------------------------------*/

 # 1. $GLOBALS: Es un array que sirve para acceder a todas las variables globales desde cualquier parte del script PHP.
    $a=5;
    $b=10;

    function sumar(){
        $GLOBALS["res"]=$GLOBALS["a"] + $GLOBALS["b"];
    }
    sumar();
    echo $GLOBALS["res"];

# 2. $_SERVER: Contiene información sobre encabezados, rutas y ubicaciones de secuencias de comandos.
    echo "<br>", $_SERVER["PHP_SELF"]; // Devuelve el nombre de archivo del script que se esta ejecutando incluida la ruta.

    echo "<br>", $_SERVER["SERVER_NAME"]; // Devuelve el nombre del host
    echo "<br>", $_SERVER["SCRIPT_NAME"]; // Devuelve la ruta del script
    echo "<br>", $_SERVER["SERVER_PROTOCOL"]; // Devuelve el protocolo
    echo "<br>", $_SERVER["SERVER_SOFTWARE"]; // Software utilizado
    echo "<br>", $_SERVER["REQUEST_METHOD"]; 

# 3. $_POST: se utiliza para recopilar datos después de enviar un formulario html.
    echo '<form action="" method="post">
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="inp01">
    <input type="submit" value="Enviar" name="btn01">
</form>';

if(isset($_POST['btn01'])) {
    echo "<p>Hola ", $_POST["name"], "</p>";
    print_r($_POST);
}

# 4. $_GET: se utiliza para recopilar datos después de enviar un formulario html.
    echo '<form action="" method="get">
    <label for="url">URL:</label>
    <input type="text" name="url" id="inp01">
    <input type="submit" value="Enviar" name="btn02">
</form>';

if(isset($_GET['btn02'])) {
    // echo "<p>Hola ", $_GET["url"], "</p>";
    // print_r($_GET);
}

# 5. $_REQUEST: Se utiliza para recopilar datos después de enviar un formulario html.
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo $_REQUEST["name"];
    }

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        echo $_REQUEST["url"];
    }
    print_r($_REQUEST);