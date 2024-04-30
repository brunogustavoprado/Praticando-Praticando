<?php
function verifypass($password, $hash)
{
    if (password_verify($password, $hash)) {
        echo "São iguais";
    } else {
        echo "Não são iguais";
    }
}

function encryptpass($password) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo $hashed_password;
}



encryptpass("teste");

?>

<form action="" method="post">
    <label for="username">Nome de Usuario:</label>
    <input type="text" name="username" id="username">
    <label for="senha">Digite Sua Senha:</label>
    <input type="password" name="senha" id="senha">
    <label for="Token">Digite seu token:</label>
    <input type="text">

    <button type="submit">Enviar</button>
</form>

<?php

$username = $_POST["username"];
$senha = $_POST["senha"];
$token = $_POST["token"];

verifypass("teste", "$2y$10\$Ot2VPU.7ML1YFHXEpZmDLOvAdOuxYTxRN9lomg5JNXHSREs5NzEcy
");

