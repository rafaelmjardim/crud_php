<?php
    require "db/conexao.php";
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    header('location:login.php');
    }

    $logado = $_SESSION['login'];
    echo "Logado: Bem vindo: $logado <a href='logout.php'>Sair</a>";
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <?php
        include "header.php";
    ?>

    <div class="container">
    <?php
  $sql = mysqli_query($conn, "SELECT * FROM user");
  if(mysqli_num_rows($sql)){
      echo "
          <table>
              <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Senha</th>
                  <th>Ação</th>
              </tr>
      ";
      foreach($sql as $value){
          echo "
              <tr>
                  <th>".$value['id']."</th>
                  <th>".$value['nome']."</th>
                  <th>".$value['senha']."</th>
                  <th><a href='delete.php/?delete=".$value['id']."'>Deletar</a> | <a href='edit.php'>Editar</a></th>
              </tr>
          ";
      }
      echo "</table>";
  }else{
    echo "Nenhum usuario cadastrado!";
  }

?>
    </div>
</body>
</html>
