<?php
$arquivo = "vendas.csv";

$handle = fopen($arquivo, "r");

if ($handle === false) {
    die("Erro ao abrir o arquivo.");
}

$total = 0;
$quantidade = 0;


while (($linha = fgetcsv($handle, 1000, ",")) !== false) {
    $valor = floatval($linha[0]);
    $total += $valor;
    $quantidade++;
}

fclose($handle);


if ($quantidade > 0) {
    $media = $total / $quantidade;
    echo "Média de vendas: R$ " . number_format($media, 2, ",", ".") . "\n";
} else {
    echo "Nenhuma venda encontrada.\n";
}

