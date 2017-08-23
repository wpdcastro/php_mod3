<?php
function dataAtual()
{
    return date('d/m/Y');
}

function dataAmanha()
{
    $s = date('d/m/Y', strtotime('+1 day'));
    return $s;
}
function dataOntem()
{
    $s = date('d/m/Y', strtotime('-1 day'));
    return $s;
}

function converteDataBr ($data)
{
    $dataBR = explode('-', $data);
    $dataBR = array_reverse($dataBR);
    $dataBR = implode('/',$dataBR);
    return $dataBR;
}
function converteDataSQL ($data)
{
    $dataSQL = explode('/', $data);
    $dataSQL = array_reverse($dataSQL);
    $dataSQL = implode('-',$dataSQL);
    return $dataSQL;
}

function ocorrencias($dia, $data, $data1)
{
    $cont = 0;
    $dataInicial = date_create($data);
    $dataFinal = date_create($data1);

    if ($dia == 'Domingo') {
        $dia = 'Sunday';
    } elseif ($dia == 'Segunda-Feira') {
        $dia= 'Monday';
    } elseif ($dia == 'Terça-Feira') {
        $dia = 'Tuesday';
    } elseif ($dia == 'Quarta-Feira') {
        $dia = 'Wednesday';
    } elseif ($dia == 'Quinta-Feira') {
        $dia = 'Thursday';
    } elseif ($dia == 'Sexta-Feira') {
        $dia = 'Friday';
    } else {
        $dia = 'Saturday';
    }

    $diaSemana = date_create($dia);

    do {
        if (date_format($dataInicial, 'N') == date_format($diaSemana, 'N')) {
            $cont++;
        }
        date_modify($dataInicial, '+1 day');
    } while($dataInicial<= $dataFinal);
    return $cont;
}

 //echo '> ' . ocorrencias('Quinta-Feira','10-07-2017','22-08-2017' ) . PHP_EOL; // D)
 //ocorrencia dos dias da semana entre dias duas datas
