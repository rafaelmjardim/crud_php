<?php
    require "db/conexao.php";
    include "header.php";
    session_start();
    if((!isset($_SESSION['login']) == true) && !isset($_SESSION['senha']) == true){
        header('location: login.php');
    }
    $logado = $_SESSION['login'];
    echo  "<div class='logado'>Bem vindo: $logado <a href='logout.php'>Sair</a></div>";

?>
        <div class="container-medium">
            <h1>To-do List</h1>
            <?php
                $select_sql = mysqli_query($conn, "SELECT * FROM list");
                if(mysqli_num_rows($select_sql) > 0 ){
                    echo "
                        <table>
                            <tr class='tr-top'>
                                <th class='th-top'>ID</th>
                                <th class='th-top'>Tarefa</th>
                                <th class='th-top'>Descrição</th>
                                <th class='th-top'>Ação</th>
                            </tr>
                    ";
                    foreach($select_sql as $value){
                        echo "
                            <tr>
                                <th>".$value['id']."</th>
                                <th>".$value['nome']."</th>
                                <th>".$value['descricao']."</th>
                                <th><a href='delete.php/?delete=".$value['id']."'><i class='fa-solid fa-trash-can'></i></a>  <a href='update.php'><i class='fa-solid fa-pen-to-square'></i></a></th>
                            </tr>
                        ";
                    }
                    echo "</table>";
                }else{
                    echo "Nenhum dado registrado";
                }
            ?>
        </div>
<?php
    include "footer.php";
?>