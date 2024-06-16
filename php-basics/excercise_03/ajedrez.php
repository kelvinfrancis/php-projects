<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            box-sizing: border-box;
        }
        h1{
            text-align: center;
        }
        div{
            width: 250px;
            margin: auto;
        }
        .tabla, .N, .B{
            border: 1px solid black;
        }
        td{
            width: 25px;
            height: 25px;
            text-align: center;
        }
        .N{
            background-color: black;
        }
        .B{
            color: white;
        }
        .negras, .numDer{
            transform: rotate(-180deg);
        }
    </style>
    <title>Tablero de Ajedrez</title>
</head>
<body>
    <h1>Tablero de Ajedrez con PHP</h1>
</body>
</html>
<?php

// Tablero de ajedrez
function tablero($n){
    $tablero=[];
    for ($i=0; $i < $n; $i++) { 
        # Creamos filas
        array_push($tablero,[]);
        for ($j=0; $j < $n; $j++) { 
            # Llenamos celdas
            if ($i % 2 == 0) {
                // llenamos la fila par
                if ($j % 2 == 0) {
                    // Llenamos las celdas pares
                    $tablero[$i][$j]="B";
                }else {
                    $tablero[$i][$j]="N";
                }
            }else {
                // llenamos la fila par
                if ($j % 2 == 0) {
                    // Llenamos las celdas pares
                    $tablero[$i][$j]="N";
                }else {
                    $tablero[$i][$j]="B";
                }
            }
        }
    }
    return $tablero;
}

function mostrarTablero($tablero,$n){
    $tabla="<table class='tabla'>";
    $tabla.=letrasTablero("negras", $n);
    foreach ($tablero as $i => $filas) {
        # creamos los tr
        $tabla.="<tr>";
        $tabla.="<td class='nimIzq'>".$n-$i;
        $tabla.="</td>";
        foreach ($filas as $j => $celda) {
            # creamos los td
            if ($celda=="N") {
                $tabla.="<td class='N'>$celda</td>";
            }else {
                $tabla.="<td class='B'>$celda</td>";
            }
        }
        $tabla.="<td class='nimDer'>".$n-$i;
        $tabla.="</td>";
        $tabla.="</tr>";
    }
    $tabla.=letrasTablero("blancas", $n);
    $tabla.= "</table>";
    return $tabla;
}

function letrasTablero($color, $n){
    $espacio = chr(32); // espacio en blanco
    $f = "<tr>";
    $f.= "<td> $espacio </td>";
    for ($i=0; $i < $n; $i++) { 
        # Letras del abc
        $letra=chr(65 + $i);
        $f.="<th class=$color> $letra </th>";
    }
    $f.="</tr>";
    return $f;
}
echo "<div>", mostrarTablero(tablero(8),8), "</div>";