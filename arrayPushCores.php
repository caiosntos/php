<?php


$cores = array("Vermelho", "Azul");

for($i = 0; $i<3 ; $i++) {
    $adcionaCores = readline("Digite uma nova cor: ");
    array_push($cores, $adcionaCores);
}


"\n";
echo "Cores atualizadas:\n";
print_r($cores);
