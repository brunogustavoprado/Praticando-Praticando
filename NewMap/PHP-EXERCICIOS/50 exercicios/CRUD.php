<?php
include "postgres.php";

function createTable()
{
    global $conn;
    $table = "CREATE TABLE teste (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    email VARCHAR(100)
);";
    $resultTable = pg_query($conn, $table);
    if (!$resultTable){
        echo "Não foi possivel criar a tabela";
    }else{
        echo "Tabela criada com sucesso!";
    }
}

function insertInTheTable()
{
    global $conn;
    $tableInsert = "INSERT INTO teste (nome, idade, email) VALUES ('bruno', '19', 'bruno@gmail.com')";
    $resultInsert = pg_query($conn, $tableInsert);
    if (!$resultInsert){
        echo "Não foi possivel incluir";
    }else{
        echo "Incluido com sucesso";
    }

}

function readTable()
{
    global $conn;
    $tableRead = "SELECT * FROM teste WHERE nome = 'bruno'";
    $resultRead = pg_query($conn, $tableRead);
    if (!$resultRead){
        echo "Não foi Possivel encontrar a tabela";
    }else {
        $rowCount = pg_num_rows($resultRead);
        if ($rowCount > 0) {

            while ($row = pg_fetch_assoc($resultRead)) {

                var_dump($row);
            }
        } else {
            echo "A tabela está vazia.";
        }
    }

}

function updateTable()
{
    global $conn;
    $tableUpdate = "UPDATE teste SET nome = 'Pedro', idade = '29', email = 'juca@gg.com' WHERE nome = 'bruno'";
    $resultUpdate = pg_query($conn, $tableUpdate);
    if (!$resultUpdate){
        echo "Não foi possivel atualizar as informações";
    }else{
        echo "Atualizado com sucesso";
    }

}

function deleteTable()
{
    global $conn;
    $tableDelete = "DELETE FROM teste WHERE nome = 'Pedro'";
    $resultDelete = pg_query($conn, $tableDelete);
    if (!$resultDelete){
        echo "Não foi possivel deletar esse usuario";
    }else{
        echo "Deletado com sucesso";
    }

}

createTable();
insertInTheTable();
readTable();
updateTable();
deleteTable();









