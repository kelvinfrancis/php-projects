<?php
// ----- CONDICIONALES SIMPLES

$a = 20;
$b = 20;

if ($a > $b) {
    echo "El valor de a = $a es mayor al valor de b = $b";
}
elseif ($a < $b) 
{
    echo "El valor de a = $a NO es mayor al valor de b = $b";
}
else
{
    echo "El valor de a = $a es IGUAL que el valor de b = $b";
}

echo "<hr>";

// CONDICIONAL SWITCH 
$day = 2;
switch ($day) {
    case 1:
        echo "Hoy es Lunes.";
        break;
    case 2:
        echo "Hoy es Martes.";
        break;
    case 3:
        echo "Hoy es Miércoles";
        break;
    case 4:
        echo "Hoy es Jueves.";
        break;
    default:
        echo "No se que dia es hoy.";
        break;
}

echo "<hr>";
// OPERADOR TERNARIO
// (Condición) ? instrucción verdaderas : instrucciones falsas;
$edad = 21;
echo ($edad > 18) ? "Mayor de edad." : "Menor de edad";

echo "<hr>";
// Otra sintaxis para las condicionales
if ($edad == 21):
    echo "Eres mayor de edad, $edad";
endif;

?>