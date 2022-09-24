<?php
session_start();
require_once('metodos/verificador.php');
verificador('paginas/tela-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
    <link rel="stylesheet" href="css/botao.css">  
</head>
<body>
    <?php
        $result = file_get_contents("http://node-container:9001/filmes");
        $filmes = json_decode($result);
    ?>

    <div class="container">
        <table class="table table-hover table-borderless">
            <thead>
                <tr>
                    <th scope="col">Filme</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Dia e Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filmes as $filme): ?>
                    <tr class="table-primary">
                        <td><?php echo $filme->Nome_do_Filme; ?> </td>
                        <td><?php echo $filme->Numero_da_Sala; ?></td>
                        <td><?php echo $filme->Dia_e_Hora_da_Sessao; ?></td>
                        <td><td><span onclick= "window.location.href='metodos/deletar.php?id=<?php echo $filme->id;?>'" id="boot-icon" class="bi bi-trash" style="font-size: 21px; color: rgb(17, 17, 70);"></span></td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="botoes">
            <div class="box">
                <div class="box-row">
                    <div class="box-cell box1">
                        <form method="post" action="paginas/tela-nova-sessao.php">
                            <input type='submit' name='botao' value='Adicionar nova sessão' class= "btn btn-primary btn-block" />
                        </form>
                    </div>
                    <div class="box-cell box2">
                        <form action="metodos/sair.php">
                            <a href=''>
                                <input type='submit' name='botao' value='Sair' class= "btn btn-primary btn-block" />
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>