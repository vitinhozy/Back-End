<?php
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['nome'] = $email;
    $_SESSION['senha'] = $senha;

    header('Location: ../index.php');
?>