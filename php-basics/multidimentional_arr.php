<?php
// Functions
function mostrar($array){
    foreach ($array as $tapa => $arrayInterno) {
        foreach ($arrayInterno as $tapa2 => $valor) {
            # Muestra cada valor con un espacio
            echo $valor, " ";
        }
        echo "<br>";
    }
}

function tabla($array){
    $tabla= "<table border=1>";
    foreach ($array as $taps => $arrayInterno) {
        // crea filas
        $tabla.="<tr>";
        $tabla.="<th>$taps</th>";
        foreach ($arrayInterno as $taps2 => $value) {
            // crear las celdas
            $tabla.="<td>$taps2</td>";
            $tabla.="<td>$value,<td/>";
        }
        $tabla.= "</tr>";
    }
    $tabla."</table>";
    return $tabla;
}
// 01. Crear un array bidimensional indexado de arrays indexados
$a = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
mostrar($a);

// 02. Crear un array bidimensional indexado de arrays asociativos
$autores = [
    ["apellidos"=>"Garcia Marquez", "nombre"=>"Gabriel", "nacimiento"=>1927],
    ["apellidos"=>"Gomez Jurado", "nombre"=>"Juan", "nacimiento"=>1977],
    ["apellidos"=>"Dueñas", "nombre"=>"Maria", "nacimiento"=>1974]
];
mostrar($autores);
// 03. Crear un array bidimensional asociativo de arrays indexados
$ventas = [
    "2024" => [1500,2300,5400],
    "2023" => [5500, 2300, 4500, 3000, 4300, 1000, 6000, 5600, 3400, 2000, 7000, 1230]
];
mostrar($ventas);
// 04. Crear un array bidimensional asociativo de arrays asociativos
$libros = [
    "Gabriel Garcia Marquez" => ["Cien años de soledad"=>1967,"Crónicas de una muerte anunciada" => 1985, "El amor en tiempos de cólera" => 1985],
    "Juan Gomez Jurado" => [
        "Reina Roja" => 2018, "Loba Negra" => 2019, "Rey Blanco" => 2020],
    "Maria Dueña" => ["El tiempo entre costuras" => 2009, "Misión olvido" => 2012,
    "La templanza" => 2015]
    ];
echo tabla($libros);
// 05. Crear un array bidimensional vacío NxM.
// 06. Rellenar un array bidimensional vacío NxM.
// 07. Reto: Crear un array bidimensional que simule un tablero de Ajedrez.

// video https://www.youtube.com/watch?v=AiQNGlj40rs&list=PLR88WBeFO8uYE-KJC4gxurHa2eUGNfeN3&index=18