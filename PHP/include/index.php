<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
    <a href="pagina2.php">Pag2</a>
    <?php   
        // inclui apenas um código de arquivo estrangeiro
        include "scripts/header.php";
        // apnas uma vez, caso novamente chamado, o segundo chamado será ignorado



        include "scripts/teste.php";
        include_once "scripts/teste.php";
        // require gera erros mais específicos e explicativos
        require "scripts/teste2.php";
    ?>


</body>
</html>