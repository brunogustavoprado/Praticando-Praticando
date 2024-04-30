<?php

$host = "localhost";
$port = "5432";
$DBname = "teste";
$userDB = "postgres";
$passDB = "brgust123";


$conn = pg_connect("host=$host port=$port dbname=$DBname user=$userDB password=$passDB");
if (!$conn){
    echo "Conexão errada";
    exit();
}

$tag = "Teste40";
$tagNew = "Teste50";

$query = "SELECT * FROM main WHERE users = '$tag'";
$resultQuery = pg_query($conn, $query);
if (!$resultQuery){
    echo "Ocorreu um erro ao consultar\n";
    exit();
}
$row = pg_fetch_assoc($resultQuery);
if (!$row){
    echo "Não foi possivel encontrar esse usuario";
    exit();
}
//UPDATE DE NOME

$updateQuery = "UPDATE main SET users = '$tagNew' WHERE users = '$tag'";
$resultUpdate = pg_query($conn, $updateQuery);
if (!$resultUpdate){
    echo "Não foi possivel alterar esse usuario\n";
}

$query = "SELECT * FROM main WHERE users = '$tagNew'";
$resultQuery = pg_query($conn, $query);
$row = pg_fetch_assoc($resultQuery);
if (!$row){
    echo "Ocorreu um erro ao consultar\n";
    exit();
}else{
    echo "O usuario $tagNew foi localizado!\n";
}

//UPDATE DE SENHA
$newpass = "224466";

$updateQueryPass = "UPDATE main SET passwords = '$newpass' WHERE users = '$tagNew'";
$resultUpdatePass = pg_query($conn, $updateQueryPass);
if (!$resultQuery){
    echo "Não foi possivel atualizar a senha deste usuario";
    exit();
}

$query = "SELECT * FROM main WHERE users = '$tagNew'";
$resultQuery = pg_query($conn, $query);
$row = pg_fetch_assoc($resultQuery);
if (!$row){
    echo "Ocorreu um erro ao consultar\n";
    exit();
}else{
    echo "O usuario $tagNew foi localizado! Com a nova senha: $newpass\n";
}

//UPDATE DE TOKEN

$newtoken = "224466";

$updateQueryToken = "UPDATE main SET token = '$newtoken' WHERE users = '$tagNew'";
$resultUpdateToken = pg_query($conn, $updateQueryToken);
if (!$resultUpdateToken){
    echo "Não foi possivel atualizar a senha deste usuario";
    exit();
}

$query = "SELECT * FROM main WHERE users = '$tagNew'";
$resultQuery = pg_query($conn, $query);
$row = pg_fetch_assoc($resultQuery);
if (!$row){
    echo "Ocorreu um erro ao consultar\n";
    exit();
}else{
    echo "O usuario $tagNew foi localizado! Com o novo token: $newtoken\n";
}

//PARA JUNTAR MAIS DE UMA ATUALIZAÇÃO SIMULTANEA UTILIZAR

$updateQueryToken = "UPDATE main SET token = '$newtoken', passwords = '$newpass' WHERE users = '$tagNew'";