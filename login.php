<?php
    require "db/conexao.php";

    session_start();
    if(isset($_POST['logar'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $login_result = mysqli_query($conn, "SELECT * FROM user WHERE nome='$login' AND senha='$senha'");
        if(mysqli_num_rows($login_result) > 0){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('Location: index.php');
        }else{
            echo "Usuario ou senha invalida, tente novamente!";
        }
            
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main class="container">
        <form action="" method="post">
            <h2>Login</h2>
            <input type="text" name="login" placeholder="Infome o nome">
            <input type="text" name="senha" placeholder="Infome a senha">
            <input type="submit" name="logar" value="Login">
        </form>
    </main>
</body>
</html>