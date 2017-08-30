<?php

require(__DIR__ . '/arrays.php');
/*
 cidades e suas populações
foreach ($cities as $city => $people) {
    echo '> ' . $city . ' => ' . $people . PHP_EOL;
}
*/
echo '------------- exerc a -------------' . PHP_EOL;
//cidade mais populosa
$mostPeople = 1;  // TROCAR ESSE METODO DE BUSCa
$mCity = 'a' ;

foreach ($cities as $city => $people) {
    if ($people > $mostPeople) {
        $mCity = $city ;
        $mostPeople = $people;
    }
}
echo 'A cidade mais populosa é ' . $mCity . ' >>>>> ' . $mostPeople . PHP_EOL;
echo PHP_EOL;

echo '------------- exerc b -------------' . PHP_EOL;
// b )
$mostPeople = 400000;  // TROCAR ESSE METODO DE BUSCA
$mCity = 'a' ;
foreach ($cities as $city => $people) {
    if ($people < $mostPeople) {
        $mCity = $city ;
        $lowPeople = $people;
    }
}
echo 'A cidade menos populosa é ' . $mCity . ' >>>>> ' . $lowPeople . PHP_EOL;
echo '------------- exerc c -------------' . PHP_EOL;
// c) cidades > 1000
echo PHP_EOL;
echo 'unset' . PHP_EOL;
foreach ($cities as $city => $people) {
    if ($people < 100000) {
       unset($city);
    } else {
        echo '> ' . $city . '> ' . $people . PHP_EOL;
    }
}
echo PHP_EOL;
echo '------------- exerc d -------------' . PHP_EOL;

$extraCities = ['Ribeirão Preto' => 590593, 'Dirceu' => 6818, 'Agudos' => 36700 ];
$masterArray = array_merge($cities, $extraCities);
asort($masterArray);
foreach ($masterArray as $city => $people) {
    echo '> ' . $city . ' => ' . $people . PHP_EOL;
}
echo  PHP_EOL;
echo '------------- exerc e -------------' . PHP_EOL;

ksort($masterArray);
foreach ($masterArray as $city => $people) {
    echo '> ' . $city . PHP_EOL;
}