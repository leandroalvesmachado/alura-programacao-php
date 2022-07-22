<?php
// true = 1
// false = 0

// Strings contendo inteiros válidos, serão convertidos para o tipo inteiro. 
// Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido, por não ser um inteiro decimal válido.

// Floats também são convertidos para inteiros, isso significa que a parte fracionada será removida. 
// Por exemplo, a chave 8.7 será na verdade armazenada como 8.

// Booleanos são convertidos para inteiros, igualmente, por exemplo, a chave true, será na verdade armazenada como 1 e a chave false como 0.

// Null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".

// Arrays e objetos não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.

// https://php.net/manual/pt_BR/types.comparisons.php

$array = [
    2 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste'
];

foreach ($array as $chave => $item) {
    echo "$chave - $item" . PHP_EOL;
}