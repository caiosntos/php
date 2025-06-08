<?php

$nota1 = readline("Digite a sua primeira nota: ");
$nota2 = readline("Digite a sua segunda nota: ");
$nota3 = readline("Digite a sua terceira nota: ");
$media = ($nota1 + $nota2 + $nota3) / 3;

if($media >= 7){
    echo "Sua média foi " .$media. " e você está aprovado";
} else if($media < 7){
    echo "Sua média foi abaixo de 7 e você está reprovado";
}