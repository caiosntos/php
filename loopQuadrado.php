<?php

$numeros = array(2, 4, 6, 8, 10);

for ($i = 0; $i < count($numeros); $i++) {
    $quadrado = $numeros[$i] * $numeros[$i];
    echo "O quadrado de " . $numeros[$i] . " é: " . $quadrado . "\n";
}