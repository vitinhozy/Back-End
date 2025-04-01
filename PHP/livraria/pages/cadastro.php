<?php
include('db/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];
    $avaliacao = $_POST['avaliacao'];

    $query = "INSERT INTO livros (nome, imagem, descricao, avaliacao) VALUES ('$nome', '$imagem', '$descricao', '$avaliacao')";
    mysqli_query($conexao, $query);

    header("Location: index.php?menu=home");
}
?>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome do livro" required>
    <input type="text" name="imagem" placeholder="URL da imagem">
    <textarea name="descricao" placeholder="Descrição do livro"></textarea>
    <input type="number" step="0.1" min="0" max="5" name="avaliacao" placeholder="Avaliação (0-5)">
    <button type="submit">Cadastrar</button>
</form>
