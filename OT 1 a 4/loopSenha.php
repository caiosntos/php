<?php

$senha = readline("Digite a senha: ");

do{
    if (strlen($senha) < 8) {
        echo "A senha deve ter pelo menos 8 caracteres.";
    }
    elseif (!preg_match('/[A-Z]/', $senha)) {
        echo "A senha deve conter pelo menos uma letra maiúscula.";
    }
    elseif (!preg_match('/[a-z]/', $senha)) {
        echo "A senha deve conter pelo menos uma letra minúscula.";
    }
    elseif (!preg_match('/[0-9]/', $senha)) {
        echo "A senha deve conter pelo menos um número.";
    }

    elseif (!preg_match('/[\W_]/', $senha)) {
        echo "A senha deve conter pelo menos um caractere especial.";
    }else{
        echo "Senha criada com sucesso!";
        return true;
    }

}while($senha == false);
