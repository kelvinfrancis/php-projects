<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamics tables</title>
</head>

<body>
    <!--Crear una tabla dinámica HTML de M filas y N columnas usando un script de PHP
    Pasos:
        1- Pedir el numero de filas y columnas
        2- Crear la tabla.
    -->
    <h1>Create a Dynamic Table</h1>
    <form action="" method="post">
        <label for="rows">Number of rows: </label><input type="number" name="rows" id="rows_num"><br><br>

        <label for="cols">Number of columns: </label><input type="number" name="cols" id="cols_num"><br><br>

        <input type="submit" value="Create table" name="btn_01">
    </form>
    <h3>Table</h3>
    <hr>
    <?php
    if (isset($_POST["btn_01"])) {
        $rows = $_POST["rows"];
        $cols = $_POST["cols"];
        $table= "<table border=1>";
        for ($i = 0; $i < $rows; $i++) {
            # Create Rows
            $table.= "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                # Create Columns
                $table.= "<td>Celdas</td>";
            }
            $table.= "</tr>";
        }
        $table.= "</table>";
        echo $table;
    }
    ?>
</body>

</html>