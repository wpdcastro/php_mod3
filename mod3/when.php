<?php

require(__DIR__ . '/libs/date.php');

echo 'Hoje é ' . dataAtual() . ', ontem foi ' . dataOntem() . ', amanhã será ' . dataAmanha() .
' Se eu salvar isso no banco, os valores serão ' . converteDataSQL(dataAtual()).', '
.converteDataSQL(dataOntem()) .'e ' . converteDataSQL(dataAmanha()) .'onde ' . dataAtual() .
 ',' . dataOntem() .'e' . dataAmanha() . ' deverá ser gerado pelas funçoes do "date.php" e ' .
 converteDataSQL(dataAtual()) . ', ' . converteDataSQL(dataOntem()) .' e '. converteDataSQL(dataAmanha()).
 'serão os respectivos valores convertidos para a forma de banco.' . PHP_EOL;
