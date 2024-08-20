<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico - Cadastro de disciplina</h1>
    <a href="index.php">Voltar à listagem</a>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $disciplina->getId(); ?>">
        <input type="text" name="nome" value="<?php echo $disciplina->getNome(); ?>" placeholder="Nome...">
        <br>
        <button type= "submit">Salvá</button>
    </form>
</body>
</html>