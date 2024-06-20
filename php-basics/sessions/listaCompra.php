<?php
session_start(); // Iniciamos sesion

function borrar(){
    session_unset();
    session_destroy();
}
//borrar();
function mostrarLista(){
    $compra = $_SESSION["lista"];
    $table = "<table>";
    foreach ($compra as $t => $categoria) {
        # recorrer el array $_SESSION["lista"]
        $table.="<tr>";
        $table.="<th>$t<th>";
        foreach ($categoria as $valor) {
            # Aquí creamos los td para los artículos
            $table.="<td>$valor</td>";
        }
        $table.="</tr>";
    }
    $table.="</table> <br>";
    return $table;
}

// 1. Crear la $_SESSION si esta vacía
if (empty($_SESSION["lista"])) {
    $_SESSION["lista"] = [
        "frutas"=>[],
        "verduras"=>[],
        "lacteos"=>[]
    ];
}

// 2. Agregar los artículos a la categoría correspondiente de la lista.
if (isset($_POST["add"])) {
    array_push($_SESSION["lista"][$_POST["categoria"]], $_POST["articulo"]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compra</title>
</head>
<body>
    <form action="" method="post">
        <select name="categoria" id="">
            <option value="frutas">Frutas</option>
            <option value="verduras">Verduras</option>
            <option value="lacteos">Lacteos</option>
        </select>
        <br>
        <br>
        <label for="lista">Articulo: </label>
        <input type="text" name="articulo" id="i01">
        <input type="submit" value="Enviar" name="add">
    </form>
</body>
</html>
<?php
echo "<hr>", mostrarLista();
?>