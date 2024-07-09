
<?php

//Criando a instância do PDO

$pdo = new PDO ("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Listar todos os carros
$query = "SELECT * FROM carros";
$statement = $pdo->prepare($query);
$statement->execute();
$carros = $statement->fetchAll();

// Visualização
// echo "<pre>";
// print_r($carros);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cores</th>
        </tr>
        <?php
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
