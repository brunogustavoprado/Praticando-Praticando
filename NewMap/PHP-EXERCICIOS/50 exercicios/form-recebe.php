<?php

$nome = array(
    "Bruno",
    "Paulo",
    "Beatriz",
    "Marcos",
    "Joaquim",
    "Isabala",
    "Lucas",
    "Miguel"
);
    $idade = array(
        19,
        19,
        13,
        11,
        29,
        15,
        18,
        18
    );
        $sexo = array(
            "Masculino",
            "Masculino",
            "Feminino",
            "Masculino",
            "Masculino",
            "Feminino",
            "Masculino",
            "Masculino"
        );


$forge_sql = "Nome: $nome[0] |Idade: $idade[0] |Sexo: $sexo[0]\n";
$forge_sql1 = "Nome: $nome[1] |Idade: $idade[1] |Sexo: $sexo[1]\n";
$forge_sql2 = "Nome: $nome[2] |Idade: $idade[2] |Sexo: $sexo[2]\n";
$forge_sql3 = "Nome: $nome[3] |Idade: $idade[3] |Sexo: $sexo[3]\n";
$forge_sql4 = "Nome: $nome[4] |Idade: $idade[4] |Sexo: $sexo[4]\n";
$forge_sql5 = "Nome: $nome[5] |Idade: $idade[5] |Sexo: $sexo[5]\n";
$forge_sql6 = "Nome: $nome[6] |Idade: $idade[6] |Sexo: $sexo[6]\n";
$forge_sql7 = "Nome: $nome[7] |Idade: $idade[7] |Sexo: $sexo[7]\n";

echo "$forge_sql\n$forge_sql1\n$forge_sql2\n$forge_sql3\n$forge_sql4\n$forge_sql5\n$forge_sql6\n$forge_sql7";

$arquivo = fopen("arquivo.txt", "w");

fwrite($arquivo, "$forge_sql,$forge_sql1,$forge_sql2,$forge_sql3,$forge_sql4,$forge_sql5,$forge_sql6,$forge_sql7");
fclose($arquivo);
echo "Finish";


function readarq($arquivoA)
{
    $then = fopen("$arquivoA", "r");

    $arquivo = fread($then, filesize("$arquivoA"));
    echo $arquivo;
    fclose($then);

}

readarq("arquivo.txt");
