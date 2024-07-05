<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Carros</title>
</head>
<body>
        <h1>Formulário de Carro</h1>
        <hr>
        <form action="salvar.php" method="post">
        
            <input type="text" name="marca" id="marca" placeholder="Marca: ">
            <br>
            <input type="text" name="modelo" id="modelo">
            <br>
            <input type="number" name="ano" id="ano">
            <br>
            <input type="text" name="placa" id="placa">
            <br>
            <input type="cor" name="cor" id="cor">
            <br>
            <button type="submit">(Salvá)</button>
        </form>
</body>
</html>