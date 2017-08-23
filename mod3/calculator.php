<?php
$operacao = $argv[1];
unset($argv[0], $argv[1]);
$numeros = $argv;

require(__DIR__ . '/libs/math.php');

if($operacao == '+'){
    echo '> ' . soma($numeros). PHP_EOL;
} elseif($operacao == '-') {
    echo '> ' . sub($numeros). PHP_EOL;
} elseif($operacao == '*') {
    echo '> ' . multiplica($numeros). PHP_EOL;
} elseif ($operacao == '/') {
    var_dump($numeros);
    echo '> ' . divide($numeros). PHP_EOL;
} else {
    echo '> operacao nao selecionada.' . PHP_EOL;
}
