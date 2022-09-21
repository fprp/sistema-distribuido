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
        <table class="table">
            <thead>
                <tr>
                    <th>Filme</th>
                    <th>Sala</th>
                    <th>Dia e Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filmes as $filme): ?>
                    <tr>
                        <td><?php echo $filme->Nome_do_Filme; ?></td>
                        <td><?php echo $filme->Numero_da_Sala; ?></td>
                        <td><?php echo $filme->Dia_e_Hora_da_Sessao; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>