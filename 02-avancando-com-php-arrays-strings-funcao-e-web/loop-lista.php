<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

// count retorna a quantidade de elementos do array
echo count($idadeList) . PHP_EOL; // 7

for ($i = 0; $i < count($idadeList) ; $i++) { 
    echo $idadeList[$i] . PHP_EOL;
}