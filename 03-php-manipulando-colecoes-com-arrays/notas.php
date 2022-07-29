<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

// retorna o tipo da variável
// tipo = array
echo gettype($notas) . PHP_EOL;

// verifica se a variável é um array
if (is_array($notas)) {
    echo "Sim, é um array" . PHP_EOL;
}

// verifica se o array é um array númerico (chaves são números e iniciam em 0)
// a partir do php 8.1
var_dump(array_is_list($notas));

// verifica se no array existe a chave, independente se é nulo ou não
// retorna true ou false
var_dump(array_key_exists('Vinicius', $notas));

// verifica se no array existe a chave e se o valor não é nulo
// retorna true ou false
var_dump(isset($notas['Vinicius']));

// verifica se o valor existe no array
// retorna true ou false
// comparação == (valor)
var_dump(in_array(10, $notas));


// verifica se o valor existe no array
// retorna true ou false
// comparação === (valor e tipo)
var_dump(in_array(10, $notas, true));

// array_search = procura o valor no array e retorna a chave que possui o valor
// caso não exista, retorna false
// comparação == (valor)
echo "Quem tirou 10?" . PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;

// array_search = procura o valor no array e retorna a chave que possui o valor
// caso não exista, retorna false
// comparação === (valor e tipo)
echo "Quem tirou 10?" . PHP_EOL;
echo array_search(10, $notas, true) . PHP_EOL;