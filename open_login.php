<?php
session_start();
    require "db/conexao.php";
    include "header.php";

    if(isset($_POST['login'])){
        $lognome = $_POST['lognome'];
        $logsenha= $_POST['logsenha'];

        $sql = mysqli_query($conn, "SELECT * FROM user WHERE nome='$lognome' AND senha='$logsenha'");
        if(mysqli_num_rows($sql) > 0){
            $_SESSION['login'] = $lognome;
            $_SESSION['senha'] = $logsenha;
            header('Location: index.php');
        }else{
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            echo "Usuario invalido: >";
            echo "<a href='login.php'>Tentar novamente</a>";
            
        }

    }
?>
