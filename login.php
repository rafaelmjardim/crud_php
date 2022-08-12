<?php
    require 'db/conexao.php';
    // include "header.php";

    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<div class="container">
    <form action="open_login.php" method="post">
        <h2>Logar</h2>
        <input type="text" name="lognome" placeholder="Informe o nome" required>
        <input type="password" name="logsenha" placeholder="Informe a senha" required>
        <input type="submit" name="login" value="Login">
        <button class="btn-input"><a href="insert.php">Cadastrar</a></button>
    </form>
</div>