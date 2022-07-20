<?php

$idade1 = 21;
$idade2 = 23;
$idade3 = 25;
$idade4 = 31;

// forma de declarar um array no php < 5.4
$idadeList1 = array(21, 23, 25, 31);

// nova forma de declarar um array no php >= 5.4
// vetor no php começa da posição 0
$idadeList2 = [21, 23, 25, 31];

echo $idadeList2[0] . PHP_EOL; // 21
echo $idadeList2[1] . PHP_EOL; // 23

$primeiraIdade = $idadeList2[0];
echo $idadeList2[0] . PHP_EOL; // 21