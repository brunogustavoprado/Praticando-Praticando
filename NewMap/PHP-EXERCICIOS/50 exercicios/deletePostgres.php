<?php

$host = "localhost";
$port = "5432";
$userDB = "postgres";
$passDB = "brgust123";
$DBname = "teste";

$conn = pg_connect("host=$host port=$port dbname=$DBname user=$userDB password=$passDB");
if (!$conn){
    echo "Não foi possivel realizar a conexão com esse bando de dados";
}else{
    echo "Conectado com sucesso!\n\n";
}

$tag = "Teste";


$query = "SELECT * FROM main WHERE users = '$tag'";
$resultQuery = pg_query($conn, $query);
$row = pg_fetch_assoc($resultQuery);

if (!$row){
    echo "Não foi possivel achar esse usuario";
}else {
    $del = "DELETE FROM main WHERE users = '$tag'";
    $result = pg_query($conn, $del);

    if (!$result) {
        echo "Não foi possivel deletar esse usuario";
    } else {
        echo "Usuario deletado com sucesso";
    }
}