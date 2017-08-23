<?php

require(__DIR__ . '/libs/date.php');
require(__DIR__ . '/config/config.php');

echo 'Meu nome é ' . $nome .' e desde que eu fui contratado eu realizei a limpeza do Labs '. ocorrencias($dia, $dataAdm, converteDataSQL(dataAtual())) . ' vezes.' . PHP_EOL;





