<?php
$host = "localhost";$port = "5432";$dbname = "teste";$user = "postgres";$password = "brgust123";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Erro ao conectar ao banco de dados.";
    exit;
}

$query = "SELECT * FROM main";
$result = pg_query($conn, $query);
if (!$result) {
    echo "Erro na consulta.";
    exit;
}

$date = "";

 while ($row = pg_fetch_assoc($result)) {
     $date .= "Nome:" . $row['users'] . "" .
     " Senha:" . $row['passwords'] . "" .
         " Token:" . $row['token'] . "\n";
}

$arquivo = fopen("log.txt", "w");

fwrite($arquivo, $date);

fclose($arquivo);

// O log utilizando o PG ele puxa os dados usando select da tabela, retornando os dados necessarios no total 144 mil dados


