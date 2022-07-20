<?php

echo "#1" . PHP_EOL;
echo "#2" . PHP_EOL;
echo "#3" . PHP_EOL;
echo "#4" . PHP_EOL;
echo "#5" . PHP_EOL;
echo PHP_EOL . PHP_EOL;

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    
    // $contador = $contador + 1;
    $contador++;
}