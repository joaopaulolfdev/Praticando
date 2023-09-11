<?php 

$listar = $pdo ->prepare("SELECT * FROM cadastro");
$listar ->execute();
$resultadoListar = $listar->fetchAll();

foreach($resultadoListar as $keyListar => $valueListar){  
    
   $id = $valueListar['id'];

        $sqlEditar = $pdo ->prepare("UPDATE produtos set nome=?, preco=? WHERE id=$id");
        $sqlEditar->execute(array($nomeEditar, $precoEditar));
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
    }

    if(isset($_POST['excluir_'.$valueListar['id']])){
        $nomeExcluir = $_POST['nomeEditar'];
        $precoExcluir = $_POST['precoEditar'];

        $id = $valueListar['id'];

        $sqlEditar = $pdo ->prepare("DELETE FROM produtos WHERE id=?");
        $sqlEditar->execute(array($id));
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
    }
    
    ?>

<div class="box">

    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['aluno'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Disciplina</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['disciplina'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Nota 1</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['nota1'];  ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Nota 2</span>
            <input type="text" class="form-control" value="<?php echo $valueListar['nota2'];  ?>">
        </div>

    </form>



</div>

<?php

?>