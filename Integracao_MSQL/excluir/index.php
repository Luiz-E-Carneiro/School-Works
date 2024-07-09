<?php

$pdo = new PDO ("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM carros WHERE id = :id";
$statement = $pdo->prepare($query);

$statement->bindValue(":id","1");

$success = $statement->execute();
if ($success) {
    echo "Excluído com sucesso! </br>";
    echo $pdo->lastInsertId();
} else {
    echo "Não deu certoo :(";
}