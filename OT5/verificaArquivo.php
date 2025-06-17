<?php

$arquivo = "arquivo.txt";

if (file_exists($arquivo)) {
    echo "O arquivo $arquivo está no diretório atual\n";
}else{
    echo "Não existe o arquivo $arquivo\n";
}