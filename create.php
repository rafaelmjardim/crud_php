<?php
    require "db/conexao.php";
    include "header.php";
    
    function cadastro(){
        require "db/conexao.php";
        
        if(isset($_POST['enviar']) && !empty($_POST['nome']) && !empty($_POST['descricao'])){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
    
            $insert_result = $conn->prepare("INSERT INTO list VALUES(null,?,?)");
            $insert_result->bind_param('ss',$nome, $descricao);
            $insert_result->execute();
                
            return "Cadastrado com sucesso!" ;
        }
    } 
?>


    <div class="container-medium">
        <form action="" method="post">
            <h2>Cadastrar</h2>
            <?php
               echo cadastro();
            ?>
            <input type="text" name="nome" placeholder="Infome a tarefa">
            <input type="text" name="descricao" placeholder="Infome uma descrição">
            <input class="btn" type="submit" name="enviar" value="Enviar">
        </form>
    </div>

<?php
    include "footer.php";
?>