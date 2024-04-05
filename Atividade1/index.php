<?php
require_once("Obra.php");

$diretorio = "./classes/";
$arquivos = glob($diretorio . "*php");

foreach ($arquivos as $arq) {
    require_once $arq;
}


