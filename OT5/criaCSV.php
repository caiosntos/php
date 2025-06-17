<?php

$vendas = [
    [150.50],
    [200.00],
    [300.75],
    [400.00],
    [250.25]
];

$arquivo = fopen("vendas.csv", "w");


foreach ($vendas as $venda) {
    fputcsv($arquivo, $venda);
}

fclose($arquivo);

echo "Arquivo vendas.csv criado com sucesso!\n";

