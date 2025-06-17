<?php

$colecao = array(
    "Ficcao" => array(
        array(
            "Titulo" => "1984",
            "Autor" => "George Orwell",
            "Ano" => 1949
        ),
        array(
            "Titulo" => "Admirável Mundo Novo",
            "Autor" => "Aldous Huxley",
            "Ano" => 1932
        )
    ),
    "NaoFiccao" => array(
        array(
            "Titulo" => "Sapiens",
            "Autor" => "Yuval Noah Harari",
            "Ano" => 2011
        ),
        array(
            "Titulo" => "Nada pode me parar",
            "Autor" => "David Goggins",
            "Ano" => 2018
        ),
        array(
            "Titulo" => "O Andar do Bêbado",
            "Autor" => "Leonard Mlodinow",
            "Ano" => 2008
        )
    )
);


$totalLivros = 0;

foreach ($colecao as $categoria) {
    $totalLivros += count($categoria);
}

echo "Número total de livros na coleção: $totalLivros\n";

