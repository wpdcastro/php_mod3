<?php
require(__DIR__ . '/arrays.php');

echo '-------------- a ----------------' . PHP_EOL;
$cities = [];
foreach ($cityPolitics as $dados) {
    $cities[] = $dados['name']  .' > ' . $dados['population'];
}
arsort($cities);
foreach ($cities as $city) {
    echo $city . PHP_EOL;
}

echo '-------------- b ----------------' . PHP_EOL;
foreach ($cityPolitics as $dados) {
    if($dados['mayor']['corrupt']) {
        echo $dados['mayor']['name'] . PHP_EOL;
    }
}
echo '-------------- c ----------------' . PHP_EOL;
foreach ($cityPolitics as $dados) {
    foreach ($dados['councilman']['people'][0]['contact'][0] as $tel) {
        if($dados['name'] == 'Bauru') {
         echo '> ' . $tel . PHP_EOL;
        }
    }
}
echo '-------------- d ----------------' . PHP_EOL;

$idadeAvulsa = 0;
foreach ($cityPolitics as $dados) {
    $dataHj = strtotime(date('Y-m-d'));
    $dataEntrada = strtotime($dados['mayor']['birthdate']);
    $segundos = $dataHj - $dataEntrada;
    $minutos = $segundos / 60;
    $horas = $minutos / 60;
    $dias = $horas/24;
    $anos = $dias/365;

        if (intval($anos) > $idadeAvulsa) {
            $idadeAvulsa = intval($anos);
            $mayorName = $dados['mayor']['name'];
            $city = $dados['name'];
        }
}
    echo '> ' . $mayorName . ', ' . $idadeAvulsa . ' anos. De ' . $dados['name'] . PHP_EOL;

echo '-------------- e ----------------' . PHP_EOL;
$cont = 0;
foreach ($cityPolitics as $dados) {
    foreach ($dados['councilman']['people'] as $vereador) {
        $cont++;
    }
    echo $dados['name'] . ' > ' . $cont . PHP_EOL;
    echo '-------------------------' . PHP_EOL;
}

echo '-------------- f ----------------' . PHP_EOL;

$cont = 0;
$valid = 0;
foreach ($cityPolitics as $dados) {
    foreach ($dados['councilman']['people'] as $vereador) {
        if(isset($vereador['relatives'])) {
           foreach ($vereador['relatives'] as $parente) {
                    if(isset($parente)) {
                    $cont++;
                    break;
                    }
            }
        }
    }
        echo $dados['name'] . ' > ' . $cont . PHP_EOL;
    $cont = 0;
    echo '-------------------------' . PHP_EOL;
}

echo '-------------- g ----------------' . PHP_EOL;
$cont = 0;
foreach ($cityPolitics as $dados) {
    echo $dados['name'] . PHP_EOL;
    foreach ($dados['councilman']['people'] as $vereador) {
        if($vereador) {
            $cont++;
            if(isset($vereador['relatives'])) {
                foreach($vereador['relatives'] as $parentes) {
                    $cont++;
                }
            }
        }
    }
    echo '> ' . $cont . PHP_EOL;
    echo '-------------- --- ----------------' . PHP_EOL;
    $cont = 0;
}

echo '-------------- h ----------------' . PHP_EOL;
$cont = 0;
foreach ($cityPolitics as $dados) {
    echo $dados['name'] . PHP_EOL;
    echo 'população > ' . $dados['population'] . PHP_EOL;
    foreach ($dados['councilman']['people'] as $vereador) {
        $cont++;
    }
     echo 'Media de vereadores > ' . $dados['population']/$cont . PHP_EOL;
     var_dump($cont);
     echo '-------------- --- ----------------' . PHP_EOL;
}

echo '-------------- i ----------------' . PHP_EOL;
$cont = 0;
foreach ($cityPolitics as $dados) {
    echo $dados['name'] . PHP_EOL;
    foreach ($dados['councilman']['people'] as $vereador) {
        if($vereador) {
            if(isset($vereador['relatives'])) {
                foreach($vereador['relatives'] as $parentes) {
                    if($parentes['useless']) {
                        $cont = 1;
                        }
                    }
                }
        if($cont) {
            echo 'Vereador: ' .$vereador['name'] . PHP_EOL;
            foreach ($vereador['contact'][0] as $tel) {
                echo '> ' . $tel . PHP_EOL;
            }
        }
        }
    }
    echo '---------------' . PHP_EOL;
}

echo '-------------- j ----------------' . PHP_EOL;
foreach ($cityPolitics as $dados) {
    foreach ($dados['councilman']['people'] as $vereador) {
        if($vereador) {
            if(isset($vereador['relatives'])) {
                foreach($vereador['relatives'] as $parentes) {
                    if($parentes['useless']) {
                        echo 'Nome parente: ' . $parentes['name'] .
                         ', Cidade: ' . $dados['name'] . ', Vereador: ' .
                         $vereador['name'] . PHP_EOL;
                    }
                }
                echo '---------------' . PHP_EOL;
            }
        }
    }
}

echo '-------------- k ----------------' . PHP_EOL;
foreach ($cityPolitics as $dados) {
    echo $dados['name']  . PHP_EOL;
    $dataA = date_create($dados['councilman']['started_at']);
    $dataB = date_modify($dataA, '+4 years');
    echo ' Data da eleicao > ' . date_format($dataB , 'Y') . PHP_EOL;
}

echo '-------------- l ----------------' . PHP_EOL;
//vereadores nome a cidade filtrando pelos que tem min 2 tel
$cont = 0;
foreach ($cityPolitics as $dados) {
    echo $dados['name'] . PHP_EOL;
    foreach ($dados['councilman']['people'] as $vereador) {
       foreach ($vereador['contact'] as $tel) {
        $cont = count($tel);
        }
        if($cont >= 2) {
        echo '> ' . $vereador['name'] . PHP_EOL;
       }
    }
    echo '------------------------' . PHP_EOL;
}

echo '-------------- m ----------------' . PHP_EOL;
// vereador que tem mais parentes inuteis empregados .
$compara = 0;
$cont = 0;
foreach ($cityPolitics as $dados) {
    echo $dados['name'] . PHP_EOL;
    foreach ($dados['councilman']['people'] as $vereador) {
        if($vereador) {
            if(isset($vereador['relatives'])) {
                foreach($vereador['relatives'] as $parentes) {
                    if($parentes['useless'] == NULL)
                        $cont++;
                }
                if($compara <= $cont) {
                    $compara = $cont;
                    $nomeVer = $vereador['name'];
                } else
                    $nomeVer = 'Vereadores sem parentes inúteis empregados';
            }
        }
    }

    echo '> ' . $nomeVer . PHP_EOL;
    echo '-------------- --- ----------------' . PHP_EOL;
    $cont = 0;
}