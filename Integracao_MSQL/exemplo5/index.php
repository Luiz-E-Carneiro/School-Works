<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <h1>Listagem de Carros</h1>
    
    <a href="formulario.php">Inserir Carro</a>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Ações</th>
        </tr>

        
        <?php

            require_once("./../sql/db/config.php");
            require_once("./../sql/db/Database.php");

            $db = new Database();

            $carros = $db->Select("SELECT * FROM carros");

            foreach ($carros as $carro) {

                echo "<tr>";
                echo "<td>". $carro["id"] ."</td>";
                echo "<td>". $carro["marca"] ."</td>";
                echo "<td>". $carro["modelo"] ."</td>";
                echo "<td>". $carro["ano"] ."</td>";
                echo "<td>". $carro["placa"] ."</td>";
                echo "<td>". $carro["cor"] ."</td>";
                echo "<td>". "<a href='formulario.php?id=". $carro["id"] . "'>Editar</a>" ."</td>";
                echo "</tr>";
                
            }

        ?>
    </table>
    
</body>
</html>