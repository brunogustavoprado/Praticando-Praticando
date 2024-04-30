<?php

function validarEnderecoIP($enderecoIP) {
    // Expressão regular para validar um endereço de IP
    $padrao = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';

    // Verifica se o endereço de IP corresponde ao padrão
    if (preg_match($padrao, $enderecoIP)) {
        return true; // O endereço de IP é válido
    } else {
        return false; // O endereço de IP não é válido
    }
}

// Testando a função com alguns exemplos
$endereco1 = "192.168.0.1";
$endereco2 = "256.0.0.1";

echo "Endereço 1: " . ($endereco1 . " é " . (validarEnderecoIP($endereco1) ? "válido" : "inválido")) . "<br>";
echo "Endereço 2: " . ($endereco2 . " é " . (validarEnderecoIP($endereco2) ? "válido" : "inválido")) . "<br>";