<?php

$nome = $_POST['nome-r'];
$email = $_POST['email-r'];
$senha = $_POST['senha-r'];
$confirmeSenha = $_POST['confirme-a-senha-r'];
$id = 0;

$strcon = mysqli_connect('mysql-container','root','admin','cinema') or die('Erro ao conectar ao banco de dados');
if($senha == $confirmeSenha){
    $sql = "INSERT INTO usuarios VALUES ";
    $sql .= "($id, '$nome', '$email', '$senha')"; 
    mysqli_query($strcon,$sql) or die("Erro ao adicionar novo usuário");
    mysqli_close($strcon);
    header ('Location:../paginas/tela-confirmacao2.php');
}else{
    header ('Location:../paginas/tela-negacao.php');
}
?>