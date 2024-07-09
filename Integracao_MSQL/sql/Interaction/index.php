<?php

require_once("./../exemplo3/config.php");
require_once("./../exemplo3/Database.php");

$db = new Database();

//Selecionar

$data = $db->Select("SELECT * FROM carros");

echo "<prev>";
print_r($data);