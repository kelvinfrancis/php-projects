<?php

// ---------- Biblioteca de funciones

// Determinar si el numero es primo
// 2. Crear la función primo
function Primo($num)
{
    //* Comprobar que el numero dado sea entero positivo
    if ($num > 1) {
        //* Encontrar los divisores del numero y contarlos
        $cont = 2;
        for ($i = 2; $i < $num / 2; $i++) {
            if ($num % $i == 0) {
                $cont++;
            }
        }
        //* Verificar si tiene mas de dos divisores y retornar resultado.
        if ($cont > 2) {
            return "El numero $num NO es número primo.";
        } else {
            return "El numero $num ES un número primo.";
        }
    } else {
        return "Numero debe ser entero positivo mayor que 1.";
    }
}

function Fibonacci($num)
{
    if ($num > 1) {
        // Calcular los N términos de la succession
        // 1. Creamos dos variables para primeros 2 términos
        $t1 = 1;
        $t2 = 2;
        // Creamos una variable para concatenar la serie
        $serie = "$t1";
        for ($i = 1; $i < $num; $i++) {
            # Concatenar el nuevo termino de la serie
            $serie .= ", $t2";
            //Intercambio de variables
            $aux = $t1;
            $t1 = $t2;
            $t2 = $aux + $t1;
        }
        return $serie;
    } else {
        return "El numero debe ser mayor a 1";
    }
}

function Factorial($num)
{
    if ($num >= 0) {
        if ($num == 1 || $num == 0) {
            return "El factorial de $num es 1";
        } else {
            // Calcular el factorial
            $factorial = 1;
            for ($i = $num; $i > 0; $i--){
                $factorial *= $i;
            }
            return "El factorial de $num! es $factorial";
        }
    } else {
        return "No existe el factorial de números negativos";
    }
}

// Factorial Recursivo
function factorialRecursivo($num){
    if ($num == 1) {
        return 1;
    } else {
        return $num * factorialRecursivo($num-1);
    }
}
// 1. Numero Primo
if (isset($_POST['primo'])) {
    // Leer el numero
    $num = (int)$_POST['primo'];
    // 3. llamar a la función
    echo Primo($num);
}

// 2. Fibonacci
if (isset($_POST['fibo'])) {
    // Leer el numero
    $num = (int)$_POST['fibo'];
    // 3. llamar a la función
    echo Fibonacci($num);
}

// 2. Factorial
if (isset($_POST['facto'])) {
    // Leer el numero
    $num = (int)$_POST['facto'];
    // 3. llamar a la función
    echo Factorial($num);
    echo "<hr>";

    // factorial recursivo
    if ($num>=1) {
        echo "El factorial de $num! con recursividad es: ", factorialRecursivo($num);
    }
}
