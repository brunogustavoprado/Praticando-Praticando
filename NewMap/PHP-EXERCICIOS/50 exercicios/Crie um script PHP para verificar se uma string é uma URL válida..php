<?php
// Função para verificar se uma string é uma URL válida
function verificarURL($url) {
    // Use filter_var() com FILTER_VALIDATE_URL para verificar se é uma URL válida
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "A string '$url' é uma URL válida.";
    } else {
        echo "A string '$url' não é uma URL válida.";
    }
}

// Testando a função com sua URL de exemplo
$url = "www.google.online";
verificarURL($url);
?>
