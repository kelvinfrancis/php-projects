<?php
// LOOPS
$cont = 1;
// while ($cont <= 1000) {
//     echo ", ".$cont;
//     $cont++;
// }

// do {
//     echo "$cont, ";
//     $cont++;
// } while ($cont > 100);

for ($i=1; $i <= 100; $i++) { 
    if ($i == 50) {
        //break;
        continue;
    }
    echo "$i, ";
}

?>