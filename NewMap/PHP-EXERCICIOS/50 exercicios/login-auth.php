<?php
session_start();
?>
<form action="login-auth.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <button type="submit">Enviar</button>
</form>

<?php
include "auth.php";

authLogin();

//Coleta senha pelo () no txt login
//Coleta o user pelo []





