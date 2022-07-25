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

// remove o elemento do array
unset($contasCorrentes['123.256.789-12']);

// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta) {
//     // exibeMensagem(
//     //     $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
//     // );

//     // só funciona assim dentro de uma string
//     // forma string simples
//     // exibeMensagem(
//     //     "$cpf $conta[titular] $conta[saldo]"
//     // );

//     // forma string complexa
//     // exibeMensagem(
//     //     "$cpf {$conta['titular']} {$conta['saldo']}"
//     // );

//     exibeConta($conta);
// }
// echo "</ul>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>