<?php

$idade = 21;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

// if ($idade == 18 or $idade > 18) {
// }


// if ($idade == 18 and $idade > 18) {
// }

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;

echo "Adeus!";