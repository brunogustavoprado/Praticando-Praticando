<?php


function sacarDinheiro($cpf, $valor)
{
    global $saldoClientes;
    $saldo = $saldoClientes[$cpf];

    if ($valor <= $saldo){
        $resultado = $saldo - $valor;
        $saldoClientes[$cpf] = $resultado;
    }else{
        echo "Saldo Indisponivel";
    }

}