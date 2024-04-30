<?php
$host = "localhost";$port = "5432";$dbname = "teste";$user = "postgres";$password = "brgust123";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Erro ao conectar ao banco de dados.";
    exit;
}

$insert = "INSERT INTO main (users, passwords, token) VALUES ('Teste', 237338, 327473)";
$result = pg_query($conn, $insert);
if (!$result) {
    echo "ERRO: NÃO FOI POSSIVEL INSERIR OS DADOS.";
    exit;
}else{
    echo "Incluido com sucesso!";
    return true;
}
