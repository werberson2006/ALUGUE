<?php

    session_start();

    include_once('../../database/conexao.php');

    if(isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        //ACESSA

        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $senha = md5($senha);

        $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
        $result = mysqli_query($conexao, $sql);
        $resultado = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) < 1) {
            $_SESSION['login_erro'] = "Usuário ou senha inválidos!";
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            
            header('Location: login.php');
        }else {

            $_SESSION['email'] = $resultado['email_usuario'];
            $_SESSION['senha'] = $resultado['senha_usuario'];
            $_SESSION['nome'] = $resultado['nome_usuario'];
            $_SESSION['acesso'] = $resultado['acesso'];

            if($_SESSION['acesso'] == "LOCATARIO") {
                header('Location: ../home/home.php');
            } else {
                header('Location: ../locador/locador.php');
            }
        }
    } else {
        //NÃO ACESSA
        $_SESSION['login_erro'] = "Usuário ou senha inválidos!";
        header('Location: login.php');
    }

?>