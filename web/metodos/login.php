<?php
echo phpinfo();
?>

<?php

$filme = $_POST['filme'];
$sala = $_POST['sala'];
$diahora = $_POST['diahora'];

$strcon = mysqli_connect('mysql-container','root','admin','cinema') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO filmes VALUES ";
$sql .= "('$filme', '$sala', '$diagora')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Sessão cadastradada com sucesso!";
echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>
?>