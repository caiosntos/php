<?php

$conexao = new mysqli("localhost", "root", "C@io1404", "mercado");

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

echo "Conexão bem sucedida!\n";

$idproduto = 1;
$alteraPreco = 5.89;

$consultaPreparada = "UPDATE produto set preco = ? where idproduto = ?";
$stmt = $conexao->prepare($consultaPreparada);
$stmt->bind_param("si", $alteraPreco, $idproduto);

if($stmt->execute()){
    echo "Inserção bem-sucedida!\n";
}else{
    echo "Erro ao inserir: " . $conexao->error;
}

$stmt->close();