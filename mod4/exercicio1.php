<?php

require(__DIR__ . '/arrays.php');

// a ordenar por ordem alfabetica
asort($labStack);
foreach ($labStack as $linguagens) {
    echo '> '. $linguagens . PHP_EOL;
}
echo  PHP_EOL;

// b add 2 novos tec e ordem alfab
array_push($labStack, 'C#', 'Shell');
asort($labStack);
foreach ($labStack as $linguagens) {
    echo '> '. $linguagens . PHP_EOL;
}
echo '------------- exerc c -------------' . PHP_EOL;

// c remova as tecnologias ligadas a bd ou filas e imprima o restante
asort($labStack);
unset($labStack[0]);
unset($labStack[1]);
unset($labStack[3]);
unset($labStack[5]);
unset($labStack[6]);
unset($labStack[8]);
unset($labStack[9]);

foreach ($labStack as $linguagens) {
    echo '> '. $linguagens . PHP_EOL;
}

// d imprimir somente tecnologias que comecem com r
echo '------------- exercicio d -------------------------------' . PHP_EOL;
foreach ($labStack as $linguagens) {
    $letraInicial = str_split($linguagens);
    if ( $letraInicial[0] == 'R') {
        echo '> '. implode('', $letraInicial) .  PHP_EOL;
    }
}


