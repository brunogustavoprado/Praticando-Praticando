<?php

function gerarSenhaAleatoria($tamanho = 10) {
    // Caracteres que serão utilizados na senha
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|[]\;:,.<>?';

    // Embaralha os caracteres
    $caracteres_embaralhados = str_shuffle($caracteres);

    // Gera a senha com base no tamanho especificado
    $senha_gerada = substr($caracteres_embaralhados, 0, $tamanho);

    return $senha_gerada;
}

// Testando a função com um tamanho de senha padrão de 10 caracteres
$senha = gerarSenhaAleatoria();
echo "Senha Aleatória: " . $senha . "<br>";

// Você também pode especificar um tamanho de senha diferente, se necessário
$outra_senha = gerarSenhaAleatoria(15);
echo "Outra Senha Aleatória: " . $outra_senha . "<br>";
