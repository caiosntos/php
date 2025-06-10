<?php

function ordemInvertida($texto) {
    return strrev($texto);
}

$ordem = readline("Digite o ordem: ");
$resultado = ordemInvertida($ordem);

echo "A ordem invertida é: $resultado\n";