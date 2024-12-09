<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/catalogo-filmes/public/css/tela_login.css">
</head>
<body>
    <form>
    <div class="container">
        <h1>Login</h1>
        <input class="format" type="text" name="username" placeholder="Nome de usuario" required>
        <br><br>
        <input class="format" type="password" name="password" placeholder="Senha" required>
        <br><br>
        <button class="button" type="submit" onclick="Login()">Entrar</button>

    </div>
    </form>
    <script src="/catalogo-filmes/public/js/main.js" defer></script>

    
    
</body>
</html>