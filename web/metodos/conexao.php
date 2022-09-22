<?php

$usuario = 'root';
$senha = 'admin';
$database = 'cinema';
$host = 'mysql-container';

$mysqli = new mysql_connect($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>