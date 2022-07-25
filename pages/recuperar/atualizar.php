<?php 

session_start();
require_once("../../database/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css">  

    

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" type="imagem/png" href="../../img/favicon.ico" />

    <title>NOVA SENHA</title>
  </head>
  <body>

     <?php 
        if(isset($_GET['chave'])){
            $chave = mysqli_real_escape_string($conexao, $_GET['chave']);
  
              $sql = "SELECT * FROM usuarios WHERE recuperar_senha = '$chave' LIMIT 1";
              $resultado_senha = mysqli_query($conexao, $sql);
              $dados = mysqli_fetch_assoc($resultado_senha);
  
              if(isset($dados)) {
                  if(isset($_POST['atualizar'])){
                    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
                    $senha = md5($senha);
                    $recuperar_senha = 'NULL';
  
                    $id = $dados['id_usuario'];
                    $sql2 = "UPDATE usuarios SET senha_usuario = '$senha', recuperar_senha = '$recuperar_senha' WHERE id_usuario = '$id'";
                    
                    if(mysqli_query($conexao, $sql2)){
                      $_SESSION['mensagem'] = "Senha atualizada com sucesso!";
                      header("Location: ../login/login.php");
                    } else {
                      $_SESSION['mensagem'] = "Erro ao atualizar senha!";
                      header("Location: recuperar.php");
                    }
                  }
                }else {
                  $_SESSION['mensagem'] = "Erro, link inválido! Solicite um novo link...";
                  
              }
          } else {
            $_SESSION['mensagem'] = "Erro, link inválido! Solicite um novo link...";
            header("Location: recuperar.php");
          }
     ?>

    <div class="container">
      <!-- FORMULÁRIO ESQUECEU A SENHA -->
      <div class="login-form">
        
        <div class="img">
          <img class="logo" src="../../img/logo_verde.png">
        </div>

        <div class="title">Nova senha</div>

        <form action="" method="POST">
          <div class="input-box">
            <span class="material-icons">lock</span>
            <input id="senha" name="senha" type="password" placeholder="Digite sua nova senha" maxlength="10" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input id="senha2" name="senha2" type="password" placeholder="Confirme a senha" maxlength="10" required>
          </div>
        
          <div class="input-box">
            <input id="atualizar" name="atualizar" type="submit" value="Atualizar">
          </div>
        </form>
      </div>
      <!-- FIM DO FORMULÁRIO ESQUECEU A SENHA -->
    </div>

  </body>
</html>