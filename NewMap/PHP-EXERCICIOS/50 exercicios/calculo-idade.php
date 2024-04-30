<?php
//Cálculo de Idade: Escreva um programa que calcule a idade de uma pessoa a partir de sua data de nascimento e exiba-a.

$dia = 15;
$mes = 3;
$ano = 2005;

$data_atual = date("Y-m-d");

$ano_atual = date("Y", strtotime($data_atual));
$mes_atual = date("m", strtotime($data_atual));
$dia_atual = date("d", strtotime($data_atual));

$anos = $ano_atual - $ano;
$meses = $mes_atual - $mes;
$dias = $dia_atual - $dia;

if ($mes_atual < $mes || ($mes_atual == $mes && $dia_atual < $dia)) {
    $anos = $ano_atual - $ano - 1;
} else {
    $anos = $ano_atual - $ano;
}

if ($mes_atual < $mes) {
    $meses = 12 - $mes + $mes_atual;
} elseif ($mes_atual > $mes) {
    $meses = $mes_atual - $mes;
} else {
    $meses = 0;
}

if ($dia_atual < $dia) {
    $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano) - $dia + $dia_atual;
} elseif ($dia_atual > $dia) {
    $dias = $dia_atual - $dia;
} else {
    $dias = 0;
}

echo "Você tem $anos, $meses meses e $dias dias.";
