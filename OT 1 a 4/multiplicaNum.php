<?php

function multiplicao($num1, $num2) {
    return $num1 * $num2;
}

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

$resultado = multiplicao($numero1, $numero2);

echo "O resultado da sua multiplicação é $resultado.\n";