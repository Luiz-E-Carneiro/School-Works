<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>


    <a href="set.php?consulta=select"><button>Seletc All</button></a>
    <br>
    <a href="set.php?consulta=insert"><button>Insert</button></a>
    <br>
    <a href="set.php?consulta=update"><button>Update id = 1</button></a>
    <br>
    <a href="set.php?consulta=delete"><button>Delete id = 1</button></a>
    <br>


    <?php

    require_once("./../db/config.php");

    require_once("./../db/Database.php");

    $db = new Database();

    if(isset($_GET["consulta"])){
        if($_GET["consulta"] == "select"){
            $data = $db->Select("SELECT * FROM carros");
            
            foreach ($data as $carro) {
        
                echo "<table border=1>";
                echo "<tr>";
                echo "<td>" . $carro['id'] . "</td>";
                echo "<td>" . $carro['marca'] . "</td>";
                echo "<td>" . $carro['modelo'] . "</td>";
                echo "<td>" . $carro['ano'] . "</td>";
                echo "<td>" . $carro['placa'] . "</td>";
                echo "<td>" . $carro['cor'] . "</td>";
                echo "</tr>";
                echo "</table>";
            }
        }
        elseif ($_GET['consulta'] == "insert") {
            $data = $db->execute(
                "INSERT INTO carros (marca, modelo, ano, placa, cor) VALUES (:marca, :modelo, :ano, :placa, :cor)",
                ['Toyota', 'Corolla', 2020, 'ABC1234', 'Branco']);
        }
        elseif ($_GET['consulta'] == "update") {
            $data = $db->Select("UPDATE carros SET cor = :cor WHERE id = :id", ["Neon", 1]);
        }
        elseif ($_GET['consulta'] == "delete") {
            $data = $db->Select("DELETE FROM carros WHERE id = :id", [1]);
        }
    }
    ?>

</body>
</html>