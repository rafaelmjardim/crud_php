<?php
    require "db/conexao.php";
    include "header.php";

    if(isset($_POST['edit']) && !empty($_POST['setnome']) && !empty($_POST['setdescricao'])){
        $id = $_POST['id'];
        $setnome = $_POST['setnome'];
        $setdescricao = $_POST['setdescricao'];
        $update_result = $conn->prepare("UPDATE list SET nome=?, descricao=? WHERE id=?");
        $update_result->bind_param('ssi',$setnome,$setdescricao, $id);
        $update_result->execute();
        echo "Editado com sucesso!";
    }else{
        echo "Informe os dados!";
    }

?>


<form action="" method="post">
        <h2>Atualizar Lista</h2>
        <input type="number" name="id" placeholder="Infome o ID">
        <input type="text" name="setnome" placeholder="Infome a tarefa">
        <input type="text" name="setdescricao" placeholder="Infome uma descrição">
        <input class="btn" type="submit" name="edit" value="Editar">
    </form>

<?php
    include "footer.php";
?>