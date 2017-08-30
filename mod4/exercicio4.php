<?php

require(__DIR__ . '/arrays.php');

echo '-------------- a ----------------' . PHP_EOL;
 $traineeInfo = [];
foreach ($trainees as $dados) {
    $traineeInfo[] = $dados['started_at'] . ' > ' . $dados['name'] . ' , o ' . $dados['nickname'];
}
asort($traineeInfo);
foreach ($traineeInfo as $info) {
    echo '> ' . $info . PHP_EOL;
}


echo '-------------- b ----------------' . PHP_EOL;
echo 'dias > Treinee' . PHP_EOL;
$tempoTreinee = [];
foreach ($trainees as $dados) {
    $dataHj = strtotime(date('Y-m-d'));
    $dataEntrada = strtotime($dados['started_at']);
    $segundos = $dataHj - $dataEntrada;
    $minutos = $segundos / 60;
    $horas = $minutos / 60;
    $dias = $horas/24;
    $tempoTreinee[] =  $dias . ' > ' . $dados['name'] . PHP_EOL;
}
arsort($tempoTreinee);
foreach ($tempoTreinee as $tempo) {
    echo $tempo . PHP_EOL;
}

echo '-------------- c ----------------' . PHP_EOL;
echo 'Treinees que sabem Ruby: ' . PHP_EOL;
foreach ($trainees as $trainee => $dados) {
    foreach ($dados['skills'] as $skills) {
        if($skills == 'Ruby') {
            echo $dados['name'] . PHP_EOL;
        }
    }
}

echo '-------------- d ----------------' . PHP_EOL;
$treineeSkills = [];
echo 'Total de skils : ' . PHP_EOL;
foreach ($trainees as $trainee => $dados) {
    $treineeSkills[] = count($dados['skills']) . ' > ' .$dados['name']. PHP_EOL;
}
asort($treineeSkills);
foreach ($treineeSkills as $tS) {
    echo $tS . PHP_EOL;
}

echo '-------------- e ----------------' . PHP_EOL;
foreach ($trainees as $dados) {
    echo $dados['name'] . ' > ' . ($dados['age'] - 2017)*(-1) . PHP_EOL;
}
echo '-------------- f ----------------' . PHP_EOL;
foreach ($trainees as $dados) {
    if ((($dados['age'] - 2017*(-1)) - 2017) >= 19) {
        echo $dados['name'] . PHP_EOL;
    }
}

echo '-------------- g ----------------' . PHP_EOL;

echo 'Tecnologias ' . PHP_EOL;
$techno = [
            'ruby' => 0,
            'vue' => 0,
            'pwa' => 0,
            'laravel' => 0,
            'php' => 0,
            'sql' => 0,
            'ronRails' => 0,
            'js' => 0,
            'serviceWorker' => 0,
            'html' => 0,
            'css' => 0,
         ];

foreach ($trainees as $trainee => $estagio) {
    foreach ($estagio['skills'] as $skills) {
    if ($skills == 'Ruby') {
            $techno['ruby']++;
        } elseif ($skills == 'JavaScript') {
            $techno['js']++;
        } elseif ($skills == 'Javascript') {
            $techno['js']++;
        } elseif ($skills == 'Vue') {
            $techno['vue']++;
        } elseif ($skills == 'PWA') {
            $techno['pwa']++;
        } elseif ($skills == 'Laravel') {
            $techno['laravel']++;
        } elseif ($skills == 'PHP') {
            $techno['php']++;
        } elseif ($skills == 'SQL') {
            $techno['sql']++;
        } elseif ($skills == 'Ruby on Rails') {
            $techno['ronRails']++;
        } elseif ($skills == 'ServiceWorker') {
           $techno['serviceWorker']++;
        } elseif ($skills == 'Html') {
            $techno['html']++;
        } elseif ($skills == 'HTML') {
            $techno['html']++;
        } else {
           $techno['css']++;
        }
    }
}
foreach ($techno as $ling => $cont) {
    echo $ling . ' > ' . $cont . PHP_EOL;
}