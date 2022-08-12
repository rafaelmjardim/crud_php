<?php
    require "db/conexao.php";
    include "header.php";

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $setnome = $_POST['setnome'];
        $setsenha = $_POST['setsenha'];
        $sql = $conn->prepare("UPDATE user SET nome='$setnome', senha='$setsenha' WHERE id='$id'");
        // $sql->bind_param('ssi',$setnome, $setsenha, $id);
        $sql->execute();


        echo "Usuário Editado!";    
    }
?>

<div class="container">
    <form action="" method="post">
        <h2>Editar Cadastro</h2>
        <input type="number" name="id" placeholder="Informe o ID" require>
        <input type="text" name="setnome" placeholder="Informe o nome" require>
        <input type="password" name="setsenha" placeholder="Informe a senha" require>
        <input type="submit" name="edit" value="Enviar">
    </form>
</div>