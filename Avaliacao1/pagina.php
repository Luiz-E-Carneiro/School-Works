<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagina.css">
    <title>Informações do Formulário</title>
</head>

<body>
    <main>
        <h1>Informações do Formulário</h1>
        <ul>
            <li>
                <span><strong>Nome:</strong></span>
                <?php echo $_GET["nome"] ?>
            </li>
            <li>
                <span><strong>CPF:</strong></span>
                <?php echo $_GET["cpf"] ?>
            </li>
            <li>
                <span><strong>Login:</strong></span>
                <?php echo $_GET["login"] ?>
            </li>
            <li>
                <span><strong>Senha:</strong></span>
                <?php echo $_GET["senha"] ?>
            </li>
        </ul>
        <button>
            <a href="index.html">Voltar para a página inicial</a>
        </button>
    </main>
</body>

</html>