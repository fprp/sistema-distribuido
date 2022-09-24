<?php
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);;
    $senha = $_POST['senha'];

    $strcon = mysqli_connect('mysql-container','root','admin','cinema') or die('Erro ao conectar ao banco de dados');

    $sql = "SELECT * FROM usuarios WHERE email ='$email' AND senha ='$senha'";
    $resultado = mysqli_query($strcon,$sql) or die("Erro ao buscar usuario");
    mysqli_close($strcon);
    $usuario = mysqli_fetch_assoc($resultado);

    if(!empty($usuario)){
        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        header('Location: ../index.php');
    }else{
        echo "Usuário não encontrado";
    }
?>
