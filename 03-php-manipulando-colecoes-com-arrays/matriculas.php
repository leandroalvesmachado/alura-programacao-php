<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Leandro',
    'Leonardo'
];

// combina o array, mas não preserva as chaves
// retorna um novo array
// Array
// (
//     [0] => Vinicius
//     [1] => João
//     [2] => Ana
//     [3] => Roberto
//     [4] => Maria
//     [5] => Leandro
//     [6] => Leonardo
// )
$alunos2022 = array_merge($alunos2021, $novosAlunos);


// Spread operator = ...
// a partir da versão do php 7.4
// Array
// (
//     [0] => Vinicius
//     [1] => João
//     [2] => Ana
//     [3] => Roberto
//     [4] => Maria
//     [5] => Leandro
//     [6] => Leandro
//     [7] => Leonardo
// )
$alunos2023 = [...$alunos2021, 'Leandro', ...$novosAlunos];

// adiciona um elemento no final do array
// $alunos2022[] = 'Luiz'; tb adiciona o elemento
array_push($alunos2023, 'Alice', 'Bob', 'Charlie');

// adiciona um elemento no inicio do array
array_unshift($alunos2023, 'Stephane');

// remove o primeiro elemento do array e retorna o elemento
echo array_shift($alunos2023);

// remove o último elemento do array e retorna o elemento
echo array_pop($alunos2023);
