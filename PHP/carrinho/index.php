<?php
    // inicia sessão
    session_start();

    class Produto{
        public $id;
        public $nome;
        public $valor;
        public $desc;

        public function __construct($id, $nome, $valor, $desc){
            $this->$id = $id;
            $this->$nome = $nome;
            $this->$valor = $valor;
            $this->$desc = $desc;
        }
        
    }

    // public - qualquer parte do código mexe no atributo
    // private - apenas o que está dentro de class

    // Verifica se carrinho está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }
    // adiciona produto
    if(isset($_GET['produto'])){
        $produtosDados = new Produto($_GET['id'], $_GET['produto'], $_GET['valor'], $_GET['desc']);
        $_SESSION['carrinho'][] = $produtosDados;

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
        <a href="?id=1&produto='SSD'&valor=199.00&desc='1TB de armazenamento'"><img src="img/download.jpeg" width="80px" alt="">Adicionar SSD</a>
        <a href="?id=2&produto=Disco de memória&valor=249.90&desc='Disco Legal'">Adicionar Disco de memória</a>
        <a href="?id=3&produto=Memória RAM&valor=180.00&desc='HyperX'">Adicionar Memória RAM</a>
        <a href="?id=4&produto=Placa mãe&valor=120.0&desc='Barata e funcional'">Adicionar Placa mãe</a>
    </div>
    <!-- DELETAR -->
    <a href="?deletarCarrinho=True" class="delete-link">Deletar Carrinho</a>
    
    <?php
        $valorTotal = 0;

        foreach($_SESSION['carrinho'] as $produto){
            $valorTotal += $produto->valor;
        }

        if($valorTotal == 0){
            echo 'Carrinho está vazio';
        }else{
            echo "O valor total é R$ $valorTotal";
        }
    ?>
    <ol>
        <?php
            // foreach(array as alias)
            // foreach(filmes as filme) {filme.nome, filme.desc}
            foreach($_SESSION['carrinho'] as $produto){
            echo "
            <li>
                <h1>$produto->nome</h1>
                <p>$produto->valor<p>
                <p>$produto->desc</p>
            </li>";
            }
        ?>
    </ol>
</body>
</html>