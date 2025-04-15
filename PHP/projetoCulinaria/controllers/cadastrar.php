<?php
include('../db/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $receitaTexto = $_POST['receitaTexto'];
    $autor = $_POST['autor'];
    $tipo = $_POST['tipo'];

    // imagem opcional
    $imagem = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
        $imagem_nome = uniqid() . "_" . $_FILES['imagem']['name'];
        move_uploaded_file($_FILES['imagem']['tmp_name'], "../assets/imagens/" . $imagem_nome);
        $imagem = $imagem_nome;
    }

    $sql = "INSERT INTO receitas (titulo, descricao, receitaTexto, autor, tipo, imagem) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titulo, $descricao, $receitaTexto, $autor, $tipo, $imagem]);

    header("Location: ../pages/listar_receita.php");
}
?>
