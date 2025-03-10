<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <?php include("includes/menu.php"); ?>
    <h1>Sistema Acadêmico - Disciplinas</h1>
    <a href="disciplina.php">Incluir nova</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Emendas</th>
            <th>Ações</th>
        </tr>
        <?php foreach($disciplinas as $disciplina) { ?>
            <tr>
                <td><?php echo $disciplina->getId(); ?></td>
                <td><?php echo $disciplina->getNome(); ?></td>
                <td>
                    <?php if($disciplina->getEmenda()){ ?>
                        <a href="uploads/<?php echo $disciplina->getEmenda() ?>">Visualizar</a>
                    <?php } else{
                        echo "--";
                    } ?>
                </td>
                <td>
                    <a href="disciplina.php?id=<?php echo $disciplina->getId(); ?>">Editar</a>
                    <br>
                    <a href="excluirDisciplina.php?id=<?php echo $disciplina->getId(); ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>