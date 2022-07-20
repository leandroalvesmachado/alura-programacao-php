<?php

$peso = 76;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";

// Seu IMC é de 19.817677368212. Você está com o IMC dentro do recomendado