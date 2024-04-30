<?php
//Verificação de Palíndromo: Desenvolva um programa que verifique se uma string é um palíndromo (ou seja, se ela é a mesma quando lida de trás para frente).

$palavra = "ana";

$palavrai = strrev($palavra);

if ($palavra == $palavrai){
    echo "É Palíndromo";
}else{
    echo "Não é Palíndromo";
}