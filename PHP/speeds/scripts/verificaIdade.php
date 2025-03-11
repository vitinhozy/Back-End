<?php

    $idade = $_REQUEST['idade'];

    if($idade >= 18 ){
        echo "Idade Permitida";
    }
    else {
        echo "Idade não permitida";
    }

?>