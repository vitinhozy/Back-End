<h1>Lista de Comidas</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Imagem</th>
    </tr>


<?php
    $sql = 'SELECT * FROM catalogo';
    $query = mysqli_query($conexao,$sql) or die('Erro na requisição.'.mysqli_error($conexao));

    while($dados = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td><?= $dados['nome']?></td>
                <td><?= $dados['valor']?></td>
                <td>
                    <img src="<?= $dados['imagem']?>" alt="">
                </td>
            </tr>
        <?php
    }
?>
</table>