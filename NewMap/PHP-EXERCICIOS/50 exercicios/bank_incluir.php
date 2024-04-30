<?php

function incluirCliente($cpf, $nome)
{
    global $clientes;
    $clientes[$cpf] = $nome;
}