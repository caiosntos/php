<?php

$arquivoOriginal = "sensivel.txt";
$arquivoCriptografado = "sensivel_criptografado.txt";

if(!file_exists($arquivoOriginal)){
    die("Arquivo $arquivoOriginal não encontrado\n");
}

$conteudo = file_get_contents($arquivoOriginal);


$criptografado = base64_encode($conteudo);
file_put_contents($arquivoCriptografado,$criptografado);

echo "Arquivo criptografado salvo como $arquivoCriptografado";

