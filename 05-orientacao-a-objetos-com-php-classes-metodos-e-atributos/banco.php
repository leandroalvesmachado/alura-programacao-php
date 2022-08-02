<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Leandro Machado');

var_dump($primeiraConta);

$primeiraConta->saca(300);

// Não funciona, Fatal error:  Uncaught Error: Cannot access private property Conta::$saldo
// atributo private
// $primeiraConta->saldo -= 300;

$primeiraConta->defineCpfTitular('123.456.789-10');

echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();
