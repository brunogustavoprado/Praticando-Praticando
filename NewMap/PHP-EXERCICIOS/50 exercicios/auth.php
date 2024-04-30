<?php
function authLogin()
{

    $user = $_POST["username"];
    $pass = $_POST["password"];



    $userTratamento = "[$user";
    $passTratamento = "($pass)";


    if (file_exists("login.txt")) {
        $arquivoLido = file_get_contents("login.txt");

        if (strpos($arquivoLido, $userTratamento) !== false){
            echo "Usuário encontrado" . "<br>";
            if (strpos($arquivoLido, $passTratamento) !== false){
                echo "Senha correta";
            }else{
                echo "Senha Incorreta";
                exit();
            }
        } else {
            echo "Usuário não encontrado";
            exit();
        }
    } else {
        echo "O arquivo de login não existe.";
        exit();
    }
}