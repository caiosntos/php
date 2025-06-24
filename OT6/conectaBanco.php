<?php

$conexao = new mysqli("localhost", "root", "C@io1404", "mercado");

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

echo "Conexão bem sucedida!\n";

$consulta = "SELECT descricao FROM produto";
$resultado = $conexao->query($consulta);

if ($resultado->num_rows > 0) {
    echo "\n--- Produtos Encontrados ---\n";
    while ($linha = $resultado->fetch_assoc()) {
        echo "Descricao: " . $linha['descricao']. "\n";
    }
    echo "---------------------------\n";
} else {
    echo "Nenhum resultado encontrado na tabela 'produtos'.\n";
}

if (isset($resultado) && is_object($resultado)) {
    $resultado->free();
}

$conexao->close();
echo "Conexão com o banco de dados fechada.\n";

?>