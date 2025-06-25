<?php

$conexao = new mysqli("localhost", "root", "C@io1404", "mercado");

if($conexao->connect_error){
    die("Falha na conexão: " . $conexao->connect_error);
}

$descricao = "Artisan FX Hien L";

$consultaPreparada = $conexao->prepare("Insert into produto (descricao) values (?)");
$consultaPreparada->bind_param("s", $descricao);

if($consultaPreparada->execute()){
    echo "Inserção bem-sucedida!\n";
}else{
    echo "Erro ao inserir: " . $conexao->error;
}

$consultaPreparada->close();