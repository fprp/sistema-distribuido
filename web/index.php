<?php
#session_start();
#require_once('metodos/verificador.php');
#verificador('paginas/tela-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
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
                        <td><?php echo $filme->Nome_do_Filme; ?></td>
                        <td><?php echo $filme->Numero_da_Sala; ?></td>
                        <td><?php echo $filme->Dia_e_Hora_da_Sessao; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post" action="paginas/tela-nova-sessao.php">
            <input type='submit' name='botao' value='Adicionar nova sessão' class= "btn btn-primary btn-block" />
        </form>
    </div>
</body>
</html>