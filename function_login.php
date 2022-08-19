<?php

    function login(){
        session_start();
        if(!isset($_SESSION['login']) == true && !isset($_SESSION['senha']) == true){
            header('location: login.php');
        }
        $logado = $_SESSION['login'];
        return "Bem vindo: $logado <a href='logout.php'>Sair</a>";
    }
?>