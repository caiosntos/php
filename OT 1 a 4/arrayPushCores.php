<?php

function adicionarCores(&$arrayCores, $novasCores) {
    array_push($arrayCores, ...$novasCores);
}

$cores = array("Vermelho", "Azul");

$novasCores = array("Verde", "Amarelo", "Roxo");


adicionarCores($cores, $novasCores);


echo "Cores atualizadas:\n";
print_r($cores);
