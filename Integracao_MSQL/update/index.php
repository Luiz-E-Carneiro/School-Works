<?php

$pdo = new PDO ("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = " UPDATE carros SET cor= :cor, placa= :placa WHERE id= :id";
$statement = $pdo->prepare($query);

$statement->bindValue(":cor","Branco");
$statement->bindValue(":placa","PHP8223");
$statement->bindValue(":id","2");

$success = $statement->execute();
if ($success) {
    echo "Alterado com sucesso! </br>";
} else {
    echo "Não deu certoo :(";
}