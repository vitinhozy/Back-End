<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="assets/scripts/login.php" method="post">
            <!-- email -->
             <div class="form-group">
                <label for="email">Email:</label>
                <input placeholder="Insira seu e-mail" type="email" name="email" id="email">
             </div>
        </form>
        <form action="assets/scripts/login.php" method="post">
            <!-- senha -->
             <div class="form-group">
                <label for="email">Senha:</label>
                <input placeholder="Insira sua senha" type="password"  name="senha" id="senha" required>
             </div>
            <button type="submit">LOGIN</button>
            <p>Esqueceu a senha ? <a href="#">clique aqui</a></p>
            <p>Cadastrar-se? <a href="assets/pages/cadastrar.php">clique aqui</a></p>

        </form>
    </main>

</body>
</html>