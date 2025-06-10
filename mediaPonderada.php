<?php

function mediaPonderada($nota1, $nota2, $nota3){
    $somaNota1 = $nota1 * 2;
    $somaNota2 = $nota2 * 3;
    $somaNota3 = $nota3 * 5;
    $totalSomaNota = $somaNota1 + $somaNota2 + $somaNota3;
    $somaPeso = 2 + 3 + 5;
    $calculoMedia = $totalSomaNota / $somaPeso;

    return $calculoMedia;
}

$nota1 = readline("Digite a 1° nota: ");
$nota2 = readline("Digite o 2 nota: ");
$nota3 = readline("Digite o 3 nota: ");

$resultado = mediaPonderada($nota1, $nota2, $nota3);

echo "A sua média ponderada é $resultado\n";