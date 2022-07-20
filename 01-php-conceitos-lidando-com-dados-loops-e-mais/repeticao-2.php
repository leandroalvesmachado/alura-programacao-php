<?php

// $contador++ é igual $contador = $contador + 1
// $contador++ é igual $contador += 1

// $contador = $contador + 1;
// $contador += 1;
// $contador++;

for ($contador = 1; $contador <= 15 ; $contador++) { 
    echo "#$contador" . PHP_EOL;
    // #1
    // #2
    // #3
    // #4
    // #5
    // #6
    // #7
    // #8
    // #9
    // #10
    // #11
    // #12
    // #13
    // #14
    // #15
}

echo PHP_EOL;

for ($contador = 1; $contador <= 15 ; $contador++) { 
    if ($contador == 13) {
        break;
    }

    echo "#$contador" . PHP_EOL;
}