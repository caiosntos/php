<?php

function numeroPrimo($num1){
    $contador = 0;
    for ($i = 1; $i <= $num1; $i++) {
        if ($num1 % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 2) {
        echo "Primo";
    }else{
        echo "Não Primo";
    }

}

$numero1 = readline("Digite um número: ");

numeroPrimo($numero1);