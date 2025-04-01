<?php
include('db/conexao.php');

if (!isset($conexao)) {
    die("Erro: Conexão não encontrada.");
}

$query = "SELECT * FROM livros";
$result = mysqli_query($conexao, $query);

if (!$result) {
    die("Erro ao buscar livros: " . mysqli_error($conexao));
}
?>

<div class="container">
    <h1>Livros Disponíveis</h1>
    <div class="livros">
        <?php while ($livro = mysqli_fetch_assoc($result)): ?>
            <div class="livro">
                <img src="<?= $livro['imagem']; ?>" alt="<?= $livro['nome']; ?>">
                <h2><?= $livro['nome']; ?></h2>
                <p><?= $livro['descricao']; ?></p>
                <p>Avaliação: <?= $livro['avaliacao']; ?>/5</p>
                <a href="index.php?menu=editar&id=<?= $livro['id']; ?>">Editar</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
