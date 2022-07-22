<?php

// não lança o erro, continua a execução do código, caso não encontre
// include 'funcoes.php';


// lança o erro, encerra a execução do código, caso não encontre
// require 'funcoes.php';

// lança o erro, encerra a execução do código, caso não encontre
// inclui o arquivo apenas 1 vez, evitando as repetições
require_once 'funcoes.php';


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

// https://php.net/manual/en/language.types.string.php

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
    // exibeMensagem(
    //     $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    // );

    // só funciona assim dentro de uma string
    // forma string simples
    // exibeMensagem(
    //     "$cpf $conta[titular] $conta[saldo]"
    // );

    // forma string complexa
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}