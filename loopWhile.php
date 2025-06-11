<?php

$frase = readline("Digite uma frase: ");
$contador = 0;

while ($frase === 'PHP') {
    $contador++;
    break;
}

echo "Frase final: " . $frase . "\nVezes digitadas PHP: " . $contador . "\n";
