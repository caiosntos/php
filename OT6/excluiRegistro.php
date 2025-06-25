<?php

$conexao = new mysqli("localhost", "root", "C@io1404", "mercado");

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

echo "Conexão bem sucedida!\n";

$sql = "DELETE FROM vendedores WHERE salario = 4000 ";

if($conexao->query($sql)){
    echo "Registros exlcuidos com sucesso!\n";
}else{
    echo "Registros não excluidos!\n";
}

$conexao->close();

?>