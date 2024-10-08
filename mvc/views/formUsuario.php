<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico - Usuários</title>
</head>
<body>
    <h1>Sistema Acadêmico - Usuários</h1>

    <a href="usuarios.php">Voltar</a>
    <form action="salvarUsuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>">
        <input type="text" name="login" value="<?php echo $usuario->getLogin(); ?>" placeholder="LOGIN:">
        <br>
        <input type="password" name="senha" placeholder="Senha:">
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>