<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Functions PHP</title>
</head>

<body>
    <h1>Funciones del Lenguaje PHP</h1>
    <h2>Funciones para el tratamiento de números</h2>
    <ol>
        <li>Redondear un número
            <ul>
                <li>round()
                    <?php echo round(2.5489, 2, PHP_ROUND_HALF_DOWN) ?>
                </li>
                <li>ceil()
                    <?php echo ceil(5.4678) ?>
                </li>
                <li>floor()
                    <?php echo floor(2.567) ?>
                </li>
            </ul>
        </li>
        <li>Valor absoluto
            <?php echo abs(-50) ?>
        </li>
        <li>Calcular Potencias
            <?php echo pow(5, 3) ?>
        </li>
        <li>Calcular Raíces
            <?php echo round(sqrt(40), 2) ?>
        </li>
        <li>Generar números aleatorios
            <?php echo rand(1, 10) ?>
        </li>
        <li>Dar formato a un número
            <?php echo number_format(2.345, 2) ?>
        </li>
    </ol>
    <h2>Funciones para el tratamiento de cadenas de texto</h2>
    <ol>
        <li>Contar
            <ul>
                <li>Caracteres
                    <?php echo strlen("Hello"); ?>
                </li>
                <li>Palabras
                    <?php echo str_word_count("Hola My friend"); ?>
                </li>
            </ul>
        </li>
        <li>Invertir
            <?php echo strrev("Hola Mundo!"); ?>
        </li>
        <li>Repetir
            <?php echo str_repeat("*", 5) ?>
        </li>
        <li>Dividir
            <?php echo wordwrap("Hello", 1, "-", true) ?>
        </li>
        <li>Encontrar
            <?php echo strpos("Buscar la letra a", "a", 5) ?>
        </li>
        <li>Reemplazar
            <?php echo str_replace("a", "-", "Cambia en todas las a") ?>
        </li>
    </ol>
    <h2>Funciones para el tratamiento de arrays</h2>
    <ol>
        <li>Agregar
            <?php
            $a = [3, 5, 10, 7, 15, 11];
            array_push($a, 6); // agregado al final
            array_unshift($a, 9); // agregado al principio
            print_r($a);

            ?>
        </li>
        <li>Eliminar
            <?php
            $b = ['a', 'b', 'c', 'd', 'f'];
            array_pop($b); // elimina la ultima posición
            print_r($b);
            array_shift($b); // elimina el primero
            ?>
        </li>
        <li>Encontrar
            <?php
            $c = ['a' => 22, 'b' => 23, 'c' => 24, 'd' => 25, 'f' => 28];
            echo array_search(28, $c);
            ?>
        </li>
        <li>Ordenar
            <?php
            $w = [3, 5, 10, 7, 15, 11];
            array_multisort($w);
            print_r($w);
            asort($c); // ordenar array asociativo
            arsort($c); // ordenar de mayor a menor
            print_r($c);
            ?>
        </li>
        <li>Contar
            <?php
            echo count($c);
            ?>
        </li>
        <li>Máximo y Mínimo
            <?php
            echo max($w). " y ". min($w);
            ?>
        </li>
    </ol>
</body>

</html>