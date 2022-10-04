<?php
session_start();
require_once('../metodos/verificador.php');
verificador('../paginas/tela-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Cinema | Adicionar nova sessão</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.cadastrar-sessao-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.cadastrar-sessao-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.cadastrar-sessao-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="cadastrar-sessao-form">
    <form action="../metodos/adicionar-sessao.php" method="post">
        <h2 class="text-center">Nova sessão</h2>       
        <div class="form-group">
            <input type="text" name="filme" class="form-control" placeholder="Nome do Filme" required="required">
        </div>
        <div class="form-group">
            <input type="number" name="sala" class="form-control" placeholder="Número da sala" required="required">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="diahora" class="form-control" required="required">
        </div>
        <div class="form-group">
  			<input type='submit' name='botao' value='Adicionar nova sessão' class="btn btn-primary btn-block" />
  			<input type='button' name='botao-voltar' value='Voltar' class="btn btn-primary btn-block" onclick="location.href = '/index.php';"/>
        </div>       
    </form>
</div>
</body>
</html>