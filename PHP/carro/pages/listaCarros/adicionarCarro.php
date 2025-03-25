<h1>Adicionar um Novo Carro</h1>

<form action="index.php?menu=dbAdicionarCarro" method="post">
    <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Digite o modelo do carro">
    </div>
    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite a marca do carro">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" class="form-control" placeholder="Digite o valor do carro">
    </div>
    <div class="form-group">
        <label for="ano">Ano:</label>
        <input type="date" id="ano" name="ano" class="form-control" placeholder="Digite o ano do carro">
    </div>
    <div class="form-group">
        <label for="cor">Cor:</label>
        <input type="text" id="cor" name="cor" class="form-control" placeholder="Digite a cor do carro">
    </div>
    <button type="submit" class="btn-submit">Cadastrar</button>
</form>
