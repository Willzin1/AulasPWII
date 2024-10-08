<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>   
    <?php 
        include_once "main.php";
    ?>
    
    <h1>Atividade Formulário Conectado com Banco de Dados</h1>

    <form action="index.php" method="post">
        <h2>Registre uma conta!</h2>
        
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        
        <input type="submit" value="Entrar" id="btnSub">
    </form>
</body>
</html>