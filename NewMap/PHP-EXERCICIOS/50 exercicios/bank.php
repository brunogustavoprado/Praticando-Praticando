<?php
include "bank-clientes.php";

include "bank_incluir.php";

include "bank-consultar.php";

include "bank-saques.php";

incluirCliente("07854234727", "Luciana");

sacarDinheiro("07854234727", "200");
sacarDinheiro("07854234727", "100");

//consultarCLiente("07854234727");

function transferir($seuCpf, $recebedor, $valor)
{
    global $clientes;
    global $saldoClientes;
    $saldoTitular = $saldoClientes[$seuCpf];
    $titular = $clientes[$seuCpf];
    $saldoRecebedor = $saldoClientes[$recebedor];
    $Orecebedor = $clientes[$recebedor];

    if ($valor <= $saldoClientes[$seuCpf]){
        $saldoClientes[$seuCpf] -= $valor;
        $saldoClientes[$recebedor] += $valor;
        echo "\n$titular Foi retirado: R$ $valor da sua conta e foi enviado para $Orecebedor\n\n";

    }else{
        echo  "Ocorreu um erro ao realizar essa transação, tente novamente mais tarde";
        exit();
    }
}

transferir("07884759939", "07854946183", "200");

consultarCLiente("07884759939");
consultarCLiente("07854946183");