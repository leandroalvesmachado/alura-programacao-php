<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

// diferença entre arrays, utiliza os valores, retorna um array do que ta no primeiro array e que não tá no segundo array
// O que essa função faz exatamente? Ela retorna um novo array, ou seja, não tem referência, nem nada do tipo, 
// então ela vai retornar um array contendo todos os elementos desse primeiro parâmetro que não estejam nos próximos arrays 
// que eu passar por parâmetro, porque aqui eu posso passar quantos arrays eu quiser, então posso passar vários arrays aqui.

// array(1) { ["Vinicius"] => int(6) }
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// diferença entre arrays, utilizando as chaves, retorna um array do que ta no primeiro array e que não tá no segundo array
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// diferença entre arrays, utilizando as chaves e valores, retorna um array do que ta no primeiro array e que não tá no segundo array
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));