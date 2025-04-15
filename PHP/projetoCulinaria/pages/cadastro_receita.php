<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="../controllers/cadastrar.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="Título" required>
        <textarea name="descricao" placeholder="Descrição" required></textarea>
        <textarea name="receitaTexto" placeholder="Texto da Receita" required></textarea>
    <input type="text" name="autor" placeholder="Autor" required>
    
    <select name="tipo" required>
        <option value="doce">Doce</option>
        <option value="salgado">Salgado</option>
        <option value="agridoce">Agridoce</option>
    </select>

    <input type="file" name="imagem">
    <button type="submit">Cadastrar Receita</button>
</form>

</body>
</html>