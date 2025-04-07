<?php

    include ('config.php');

    // conecta o projeto com o banco
    $conexao = mysqli_connect(SERVER, USER, PASSWORD, BASE) or die("Erro na conexão com o serviço.".mysqli_connect_error());
?>