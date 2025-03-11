<?php
  session_start();
  $email_cadastrado = $_SESSION['email'];
  $senha_cadastrada = $_SESSION['senha'];

  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];

  if($senha == $senha_cadastrada && $email == $email_cadastrado){
        echo "Logado.";
  }
  else{
    echo "Email ou senha Incorreta.";
  }
?>