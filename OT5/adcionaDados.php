<?php

$dados = [
    [
  'produtos' => 'Mousepad',
    ],
    [
        'produtos' => 'HeadSet',
    ],
];

$arquivo = fopen('vendas.csv', 'w');

foreach ($dados as $linha) {
    fputcsv($arquivo, $linha);
}

fclose($arquivo);