<?php
    $id = $_GET["idCarros"];

    echo "esse é o carro Nº $id";

    $sql = "SELECT * FROM carros WHERE idCarros = {$id}";

    $query = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta" .mysqli_error($conexao));

    $dados =  mysqli_fetch_assoc($query);
?>

<h1>Editar carro selecionado</h1>
<form action="index.php?menu=dbEditarCarro" method="post">
<div class="form-group">
        <label for="idCarros">Nº:</label>
        <input  value="<?=$dados['idCarros']?>" type="text" id="idCarros" name="idCarros" class="form-control">
    </div>
    <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input  value="<?=$dados['modeloCarro']?>" type="text" id="modelo" name="modelo" class="form-control" placeholder="Digite o modelo do carro">
    </div>
    <div class="form-group">
        <label for="marca">Marca:</label>
        <input value="<?=$dados['marcaCarro']?>" type="text" id="marca" name="marca" class="form-control" placeholder="Digite a marca do carro">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input value="<?=$dados['valorCarro']?>" type="number" id="valor" name="valor" class="form-control" placeholder="Digite o valor do carro">
    </div>
    <div class="form-group">
        <label for="ano">Ano:</label>
        <input value="<?=$dados['anoCarro']?>" type="date" id="ano" name="ano" class="form-control" placeholder="Digite o ano do carro">
    </div>
    <div class="form-group">
        <label for="cor">Cor:</label>
        <input value="<?=$dados['corCarro']?>" type="text" id="cor" name="cor" class="form-control" placeholder="Digite a cor do carro">
    </div>
    <button type="submit" class="btn-submit">Editar</button>
</form>
