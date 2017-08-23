<?php
function soma($numeros)
{
    $r = 0;
    foreach ($numeros as $numero) {
        $r = $numero + $r;
    }
    return $r;
}
function sub($numeros)
{
    $r = 0;
    foreach ($numeros as $numero) {
        $r = $numero - $r;
    }
    $r *= -1;
    return $r;
}

function multiplica($numeros)
{
    $r = 1;
    foreach ($numeros as $numero) {
        $r = $numero * $r;
    }
    return $r;
}
function divide($numeros)
{
    return $r = $numeros[2] / $numeros[3];
}
