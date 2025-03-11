<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speeds</title>
</head>
<body>
        <!-- Atividade 1 -->
         <h1>Cotação dólar </h1>
        <form action="scripts/cotacaoDolar.php" method="post">
            <input placeholder="Insira o valor em real" step = "0.01" name="dolar" id="dolar"
            type="number">
            <button type="submit">Enviar</button>
        </form>
        <hr>
        <!-- Atividade 2 -->
        <h1> Inserir idade </h1>
        <form action="scripts/verificaIdade.php" method="post">
            <input placeholder="Insira sua idade" name="idade" id="idade"
            type="number">
            <button type="submit">Enviar</button>
        </form>
        <!-- Atividade 3 -->
        <?php
            include_once "scripts/numeroAleatorio.php";
        ?>
</body>
</html>