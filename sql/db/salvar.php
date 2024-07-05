<?php

    $pdo = new PDO ("mysql:host=localhost;dbname=veiculos", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare(
        "INSERT INTO carros (marca, modelo, ano, placa, cor)
        VALUES(:marca, :modelo, :ano, :placa, :cor)");

    $statement->bindValue(":marca",$_POST["marca"]);
    $statement->bindValue(":modelo",$_POST["modelo"]);
    $statement->bindValue(":ano",$_POST["ano"]);
    $statement->bindValue(":placa",$_POST["placa"]);
    $statement->bindValue(":cor",$_POST["cor"]);

    $success = $statement->execute();

    if ($success) {
        header("location: index.php");
    } else {
        echo "Ocorreu algum erro";
    }