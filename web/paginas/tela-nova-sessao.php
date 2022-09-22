<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Nova Sessão</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />
</head>
<body>
<form method="post" action="../metodos/login.php">
  <div class="form-group">
    <label >Nome do Filme</label>
    <input type="text" name="filme" class="form-control" id="filme" aria-describedby="emailHelp" placeholder="Digite o nome do filme">
  </div>
  <div class="form-group">
    <label >Número da sala</label>
    <input type="number" name="sala" class="form-control" id="sala" placeholder="Digite o número da sala">
  </div>
  <div class="form-group">
    <label >Dia e hora da sessão</label>
    <input type="datetime-local" name="diahora" class="form-control" id="diahora" placeholder="Digite o dia e a hora da sessão no formato AAAA-MM-DD HH:MM:SSS">
  </div>
  <input type='submit' name='botao' value='Adicionar nova sessão' class='adicionar' />
</form>
</body>
</html>