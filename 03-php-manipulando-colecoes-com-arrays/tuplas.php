<?php

$dados = ['Vinicius', 10, 24];

list($nome, $nota, $idade) = $dados;
// ou
[$nome, $nota, $idade] = $dados;
// ou
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;


var_dump($nome, $nota, $idade);
