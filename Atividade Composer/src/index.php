<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <?php include 'style.php'; ?> <!-- incluíndo o CSS -->
</head>
<body>
    <form action="main.php" method="post">
        <h2>Entre em sua conta</h2>
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        
        <input type="submit" value="Entrar" id="btnSub">
    </form>
</body>
</html>


