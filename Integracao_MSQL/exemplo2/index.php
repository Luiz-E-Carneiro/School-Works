<?php
//Criando a instância do PDO

$pdo = new PDO ("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Inserção de dados
$query = "INSERT INTO carros (marca, modelo, ano, placa, cor)
VALUES (:marca, :modelo, :ano, :placa, :cor)";
$statement = $pdo->prepare($query);

// Atribuição dos valores às variáveis
$statement->bindValue(":marca","Wolkswagen");
$statement->bindValue(":modelo","Fusca");
$statement->bindValue(":ano","1990");
$statement->bindValue(":placa","XYZ9999");
$statement->bindValue(":cor","Azul");

$success = $statement->execute();
if ($success) {
    echo "Inserido com sucesso!! Nice </br>";
    echo $pdo->lastInsertId();
} else {
    echo "Não deu certoo :(";
}