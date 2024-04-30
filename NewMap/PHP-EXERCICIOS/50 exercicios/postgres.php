<?php

$host = "localhost";
$port = "5432";
$dbname = "teste";
$user = "postgres";
$password = "brgust123";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    echo "Erro ao conectar ao banco de dados.";
    exit;
} else {
   // echo "Conexão bem-sucedida!";
}

$query = "SELECT * FROM main";
$result = pg_query($conn, $query);
if (!$result) {
    echo "Erro na consulta.";
    exit;
}

while ($row = pg_fetch_assoc($result)) {
    echo "Nome: " . $row['users'] . "<br>";
    echo "Email: " . $row['passwords'] . "<br>";
    echo "Email: " . $row['token'] . "<br>";
}