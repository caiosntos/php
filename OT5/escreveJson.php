<?php


$produto = [
    "nome" => "Hien FX Zero L",
    "marca" => "Artisan"
];

$json = json_encode($produto, JSON_PRETTY_PRINT);


file_put_contents("produto.json", $json);

echo "Arquivo 'produto.json' criado com sucesso!\n";

