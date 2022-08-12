<?php
    require "db/conexao.php";

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = $conn->prepare("DELETE FROM user WHERE id=?");
        $sql->bind_param('i',$id);
        $sql->execute();


        echo "Usuário deletado!";

        header('Location: ../index.php');
    
    }
?>