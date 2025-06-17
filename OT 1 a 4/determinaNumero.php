<?php

$numero = readline("Digite um número: ");

if($numero == 0){
    echo "O seu número é zero.\n";
}elseif ($numero > 0){
    echo "O seu número é positivo.\n";
}else{
    echo "O seu número é negativo.\n";
}