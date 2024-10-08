<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico - Usuário</title>
</head>
<body>
    <h1>Sistema Acadêmico - Usuário</h1>
    <a href="usuario.php">Inserir novo</a>

    <table>
        <tr>
            <td>ID</td>
            <td>Login</td>
            <td>Ações</td>
        </tr>
        <?php foreach ($usuarios as $usuario) : ?>
            
            <tr>
                <td><?php echo $usuario->getId(); ?></td>
                <td><?php echo $usuario->getLogin(); ?></td>
                <td>
                    <a href="usuario.php?id=<?php echo $usuario->getId(); ?>">Editar</a>
                    <a href="exluirUsuario.php?id=<?php echo $usuario->getId(); ?>">Editar</a>
                </td>
            </tr>

        <?php endforeach ?>
    </table>
</body>
</html>