<?php 

include_once ("../../database/conexao.php");

        if(isset($_POST['enviar'])) {

            $email = mysqli_real_escape_string($conexao, $_POST['email']);

            $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' LIMIT 1";
            $resultado = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_assoc($resultado);

            if(isset($dados)) {
                $id = $dados['id_usuario'];
                $chave_recuperar_senha = password_hash($dados['id_usuario'], PASSWORD_DEFAULT);
                echo "Chave: $chave_recuperar_senha";

                $sql2 = "UPDATE usuarios SET recuperar_senha = '$chave_recuperar_senha' WHERE id_usuario = '$id'";
                if(mysqli_query($conexao, $sql2)){
                  header("Location: atualizar.php?chave=$chave_recuperar_senha");
                } else {
                  $_SESSION['mensagem'] = "Erro, tente novamente!";
                  header("Location: recuperar.php");
                } 
            } else {
                $_SESSION['mensagem'] = "Email não cadastrado!";
                header("Location: recuperar.php");
            }
        }
        
      ?>