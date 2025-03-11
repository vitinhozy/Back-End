<?php
    session_start();
    echo $_SESSION['nome'];
    echo " Comprou uma ";
    // echo $_SESSION['produto'];
    var_dump($_SESSION['produto']);
    session_destroy();
?>