<?php

include 'util.php';

$arrayanimais = array('Mosca', 'Aranha', 'Passaro', 'Gato', 'Cachorro', 'Vaca', 'Cavalo');
$countarray = count($arrayanimais) - 1;
$primeiroanimal = $arrayanimais[0];
$musica = new Musica();

$letramusica = null;

foreach ($arrayanimais as $key => $animal) {
    if ($key == 0) {
        $letramusica .= $musica->primeiroVerso($animal);
        $letramusica .= $musica->ultimoVerso($animal);
    } else if ($key == $countarray) {
        $letramusica .=  $musica->ultimaEstrofe($animal);
    } else {
        $letramusica .=  $musica->primeiroVerso($animal);
        $letramusica .=  $musica->randomVersoSurpresa($animal);
        $letramusica .=  $musica->repeticaoAnimais($arrayanimais, $key);
        $letramusica .=  $musica->ultimoVerso($primeiroanimal);
    }
}

echo $letramusica;