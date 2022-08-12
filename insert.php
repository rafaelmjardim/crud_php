<?php
    require 'db/conexao.php';
    include "header.php";
    session_start();
    if(isset($_POST['enviar']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = $conn->prepare("INSERT INTO user VALUES(null,?,?)");
        $result = $sql->execute(array($nome, $senha));

        echo "Usuário cadastrado!";
    }
?>

<div class="container">
    <form action="" method="post">
        <h2>Novo Cadastro</h2>
        <input type="text" name="nome" placeholder="Informe o nome" required>
        <input type="password" name="senha" placeholder="Informe a senha" required>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</div>