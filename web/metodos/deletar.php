<?php

$id = $_GET['id'];

$strcon = mysqli_connect('mysql-container','root','admin','cinema') or die('Erro ao conectar ao banco de dados');
$sql = "DELETE FROM filmes WHERE id = $id";
mysqli_query($strcon,$sql) or die("Erro ao deletar sessão");
mysqli_close($strcon);
header ('Location:../paginas/tela-exclusao.php');
?>