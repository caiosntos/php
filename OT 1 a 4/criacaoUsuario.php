<?php

$usuario = "caio.m";
$senha = "123456";

$usuarioLogin = readline("Digite o seu usuário: ");
$senhaLogin = readline("Digite a senha: ");


if ($usuario ==$usuarioLogin && $senha == $senhaLogin) {
    echo "Bem vindo $usuario!";
} else{
    echo "Usuário ou senha incorretas!";
}