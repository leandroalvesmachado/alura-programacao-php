<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->sacar(300);

// Não funciona, Fatal error:  Uncaught Error: Cannot access private property Conta::$saldo
// atributo private
// $primeiraConta->saldo -= 300;
