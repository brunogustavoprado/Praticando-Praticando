<?php
function consultarCLiente($cpf)
{
    global $clientes;
    global $saldoClientes;
    $nome = $clientes[$cpf];
    $saldo = $saldoClientes[$cpf];
    echo "\n";
    echo "Consultando CPF..... \n";
    echo "Conta encontrada: $cpf\n";
    echo "Nome do titular: $nome\n";
    echo "Saldo Disponivel: $saldo\n";
}