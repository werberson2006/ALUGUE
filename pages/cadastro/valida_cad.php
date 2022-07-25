<?php

    include_once '../../database/conexao.php';

    if(isset($_POST['cadastrar'])) {
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $senha = md5($senha);
        $opcao = $_POST['opcao'];

        $user = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, acesso) VALUES ('$nome', '$email', '$senha', '$opcao')";
        $resultado = mysqli_query($conexao, $user);
    
        if(mysqli_insert_id($conexao)){
            header("Location: ../login/login.php");
        } else {
            header("Location: cadastro.php");
        }
    } else {
        echo "NÃO VEIO DADOS!";
    }



?>