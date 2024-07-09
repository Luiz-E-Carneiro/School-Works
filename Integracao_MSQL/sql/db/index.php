<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de carros</title>
</head>
<body>
    <h1>Listagem de carros</h1>

    <a href="formulario.php">Incluir novo carro!</a>
    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
        </tr>
        <?php
            $pdo = new PDO ("mysql:host=localhost;dbname=veiculos", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare("SELECT * FROM carros");
            $statement->execute();

            $carros = $statement->fetchAll();

            foreach ($carros as $carro) {
                echo "<tr>";
                echo "<td>" . $carro['id'] . "</td>";
                echo "<td>" . $carro['marca'] . "</td>";
                echo "<td>" . $carro['modelo'] . "</td>";
                echo "<td>" . $carro['ano'] . "</td>";
                echo "<td>" . $carro['placa'] . "</td>";
                echo "<td>" . $carro['cor'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>