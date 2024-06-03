<?php
// Arreglos, vectores o matrices.

$a = [];
$b = [1, 2, 3, 4, 5];
$c = ["Avión", "Baúl", "Conde", "Duda", 2024];

// print_r($c);
for ($i = 0; $i < 4; $i++) {
    echo $c[$i], "<br>";
}
echo '<hr>';

$c[1] = "Kelvin";
echo $c[1];
echo '<hr>';
print_r($c);
echo '<hr>';

// agregar elementos al final del array
array_push($c, "Pedro", "Juan");
print_r($c);
echo '<hr>';
$n = count($c);
for ($i = 0; $i < $n; $i++) {
    # code...
    echo $c[$i], '<br>';
}
echo '<hr>';

// Array Asociativo, diccionarios
$d = [
    "nombre" => "BookerT",
    "apellido" => "James",
    "edad" => 26
];
print_r($d);
echo '<hr>';

foreach ($d as $key => $value) {
    # code...
    echo $key, ": ", $value, '<br>';
}
echo '<hr>';

// cambia valores dentro del array asociativo
$d["nombre"] = "Kyrie";
$d["apellido"] = "Irving";

foreach ($d as $key => $value) {
    # code...
    echo $key, ": ", $value, '<br>';
}

