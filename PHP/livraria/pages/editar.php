<?php
    include('db/conexao.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM livros WHERE id = $id";
    $result = mysqli_query($conexao, $query);
    $livro = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $imagem = $_POST['imagem'];
        $descricao = $_POST['descricao'];
        $avaliacao = $_POST['avaliacao'];

        $query = "UPDATE livros SET nome='$nome', imagem='$imagem', descricao='$descricao', avaliacao='$avaliacao' WHERE id=$id";
        mysqli_query($conexao, $query);

        header("Location: index.php?menu=home");
    }
?>

<form method="POST">
    <input type="text" name="nome" value="<?= $livro['nome']; ?>" required>
    <input type="text" name="imagem" value="<?= $livro['imagem']; ?>">
    <textarea name="descricao"><?= $livro['descricao']; ?></textarea>
    <input type="number" step="0.1" min="0" max="5" name="avaliacao" value="<?= $livro['avaliacao']; ?>">
    <button type="submit">Atualizar</button>
</form>
