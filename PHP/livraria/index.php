<?php
    include('db/conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria - Senai-On</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php?menu=home" class="nav-link">Home</a>
            <a href="index.php?menu=cadastro" class="nav-link">Cadastrar Livro</a>
        </nav>
    </header>

    <main>
        <?php
            if(isset($_GET['menu'])){
                $pagina = $_GET['menu'];
            }
            else{
                $pagina = 'home';
            }

            switch($pagina)
            {
                case 'home':
                    include('pages/home.php');
                    break;
                case 'cadastro':
                    include('pages/cadastro.php');
                    break;
                 case 'editar':
                    include('pages/editar.php');
                    break;
            }
        ?>
    </main>
</body>
</html>