<?php

function recebeNumero($num1, $num2){
    if ($num2 == 0){
        throw new Exception("Divisão por zero não permitida");
    }
    return $num1 / $num2;
}

$solicitaNum = readline("Digite o 1° número que deseja dividir: ");
$solicitaNum1 = readline("Digite o 2° número que deseja dividir: ");

$resultado = recebeNumero($solicitaNum, $solicitaNum1);

echo $resultado;