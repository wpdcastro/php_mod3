<?php

require(__DIR__ . '/arrays.php');

echo '-------------- a ----------------' . PHP_EOL;
foreach ($comics as $produtoras => $dados) {
    echo ' produtora > ' . $produtoras . PHP_EOL;
    echo 'foundaded at ' . $dados['founded_at'] . PHP_EOL;
    echo PHP_EOL;
}

echo '-------------- b ----------------' . PHP_EOL;
$ordenado = [[
                'produtora'=> 0,
                'fundador' => 0,
                'data_morte' => 0,
             ],
             [
                'produtora'=> 0,
                'fundador' => 0,
                'data_morte' => 0,
             ],
             [
                'produtora'=> 0,
                'fundador' => 0,
                'data_morte' => 0,
             ],
            ];
$i = 0;
foreach ($comics as $produtoras => $dados) {
    foreach ($ordenado as $valor) {
        $ordenado[$i]['produtora'] = $produtoras;
        $ordenado[$i]['fundador'] = $dados['founder']['name'];
        if ($dados['founder']['passed_at'] == NULL) {
          $ordenado[$i]['data_morte'] = 0;
        } else {
        $ordenado[$i]['data_morte'] = $dados['founder']['passed_at'];
        }
    }
    $i++;
}

$dm = [];
foreach ($ordenado as $key => $valor) {
    $dm[$key] = $valor['data_morte'];
}

array_multisort($dm, SORT_ASC, $ordenado);

foreach ($ordenado as $key => $value) {
    echo 'Produtora: ' . $value['produtora'] . PHP_EOL;
    echo 'Fundador: ' . $value['fundador'] . PHP_EOL;
    echo 'Data de Falecimento = '.  $value['data_morte'] . PHP_EOL;
}

----------------------------------------------------------------------------:
echo PHP_EOL;

echo '-------------- c ----------------' . PHP_EOL;

$hero = 0;
foreach ($comics as $produtoras => $dados) {
    if ($hero < count($dados['characters'])) {
      $diferenca = count($dados['characters']) - $hero;
      $hero = count($dados['characters']);
      $prodWin = $produtoras;
    }
}
echo 'A produtora com maior quantidade de herois é: ' . PHP_EOL;
echo '> ' . $prodWin . PHP_EOL;
echo 'Com ' . $diferenca . ' heróis a mais que a segunda colocada' .PHP_EOL;

echo '-------------- d ----------------' . PHP_EOL;

foreach ($comics as $produtoras => $dados) {
    foreach ($dados['characters'] as $herois) {
      $heroAcademy[] = $herois . ' > ' . $produtoras;
    }
}
sort($heroAcademy);
foreach ($heroAcademy as $nomes) {
  echo '> ' . $nomes . PHP_EOL;
}

echo '-------------- e ----------------' . PHP_EOL;
$moreOld = 0;
foreach ($comics as $produtoras => $dados) {
  $bornDate = ($dados['founded_at'] - 2017)*(-1);
  if ($moreOld < $bornDate) {
    $moreOld = $bornDate;
    $prodWin2 = $produtoras;
  }
}
echo 'produtora mais velhas: ' . $prodWin2 . ' > ' . $moreOld . ' anos' . PHP_EOL;

echo '-------------- f ----------------' . PHP_EOL;
$moreYoung = 0;
foreach ($comics as $produtoras => $dados) {
  $bornDate = ($dados['founded_at'] - 2017)*(-1);
  if ($moreOld > $bornDate) {
    $moreYoung = $bornDate;
    $prodWin3 = $produtoras;
  }
}
echo 'produtora mais nova: ' . $prodWin3 . ' > ' . $moreYoung . ' anos' . PHP_EOL;

echo '-------------- g ----------------' . PHP_EOL;

foreach ($comics as $produtoras => $dados) {
  $autorAge[] = ($dados['founder']['born_at'] - $dados['founded_at']) *(-1) . ' > ' . $dados['founder']['name'];
}
asort($autorAge);
foreach ($autorAge as $autorIdade) {
  echo $autorIdade . PHP_EOL;
}