<?php
    session_start();

    // Verifica se algo está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }
    // adiciona produto
    if(isset($_GET['produto'])){
        $_SESSION['carrinho'][] = $_GET['produto'];
    }

    if(isset($_GET['deletarCarrinho'])){
        session_destroy();
        // $_SESSION['carrinho'] = [];
    }
    // var_dump($_SESSION['carrinho']);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <div class="links">
        <a href="?produto= SSD">
            <img src="img/download.jpeg" width="80px" alt="">
            
            Adicionar SSD
        </a>
        <a href="?produto= Disco de memória">Adicionar Disco de memória</a>
        <a href="?produto= Memória RAM">Adicionar Memória RAM</a>
        <a href="?produto= Placa mãe">Adicionar Placa mãe</a>
    </div>
    <!-- DELETAR -->
    <a href="?deletarCarrinho=True" class="delete-link">Deletar Carrinho</a>


    <ol>
        <?php
            // foreach(array as alias)
            // foreach(filmes as filme) {filme.nome, filme.desc}
            foreach($_SESSION['carrinho'] as $produto){
            echo "<li>$produto</li>";
            }
        ?>
    </ol>
</body>
</html>