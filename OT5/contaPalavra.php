<?php

$arquivo = "paragrafo.txt";

$conteudo = file_get_contents($arquivo);

$numerodePalavras = str_word_count($conteudo);

echo "O arquivo $arquivo contem $numerodePalavras palavras.\n";