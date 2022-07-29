<?php

$notas = [ 10, 8, 9, 7];

// array(4) {
//     [0]=>int(10)
//     [1]=>int(8)
//     [2]=>int(9)
//     [3]=>int(7)
// }
var_dump($notas);

// Essa função ordena um array (ordem alfabética, ordem numérica). 
// Os elementos serão ordenados do menor para o maior ao final da execução dessa função.
sort($notas);

// array(4) {
//     [0]=>int(7)
//     [1]=>int(8)
//     [2]=>int(9)
//     [3]=>int(10)
// }
var_dump($notas);


$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);



