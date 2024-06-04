<?php

// Función que muestre un mensaje
function mensaje(){
    echo "Hola mi loco!";
}
mensaje();

// Función que suma dos números
function suma($a, $b){
    $r = $a + $b;
    return $r;
}
$x = 6;
$y = 10;
echo "<hr>Sumar: ". suma($x, $y);

// Función para multiplicar
function multiplica(&$y){ // '&' para utilizar la misma variable en ámbito global
    global $x;
    $y = $x * $y;
    return $y;
}
echo "<hr>Multiplicar: ". multiplica($y);
echo "<hr>valor de 'y' modificado: ". $y;

