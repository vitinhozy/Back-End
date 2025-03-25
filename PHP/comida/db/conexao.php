<?php
    include('config.php');

    $conexao = mysqli_connect(SERVER, USER, PASSWORD, BASE) or die("Erro na conexão com o serviço.".mysqli_connect_error());

?>