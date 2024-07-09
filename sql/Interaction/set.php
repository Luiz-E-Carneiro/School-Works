<?php

switch ($_GET['consulta']) {
    case 'select':
        header("location: index.php?consulta=select");
        break;
    case 'insert':
        header("location: index.php?consulta=insert");
        break;
    case 'update':
        header("location: index.php?consulta=update");
        break;
    case 'delete':
        header("location: index.php?consulta=delete");
        break;
}