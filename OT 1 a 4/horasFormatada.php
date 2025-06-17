<?php

function dataFormatada($formatada){
    $formatada = date("d-m-Y H:i:s");
    return $formatada;
}

$solicitaData = 1718123456;
$resultado = dataFormatada($solicitaData);

echo $resultado;