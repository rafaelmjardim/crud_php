<?php
    require "db/conexao.php";
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete_result = $conn->prepare("DELETE FROM list WHERE id=?");
        $delete_result->bind_param('i', $id);
        $delete_result->execute();
        header('location: ../index.php');
    }
?>