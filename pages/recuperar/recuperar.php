<?php 

require_once("../../database/conexao.php");
$errors = array();

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

    <title>RECUPERAR</title>
  </head>
  <body>

    <div class="container">
      <!-- FORMULÁRIO ESQUECEU A SENHA -->
      <div class="login-form">
        
        <div class="img">
          <img class="logo" src="../../img/logo_verde.png">
        </div>

        <div class="title">Recuperar a senha</div>
        

        <form action="valida_recup.php" method="POST">
          <div class="input-box">
            <span class="material-icons">email</span>
            <input id="email" name="email" type="email" placeholder="Digite seu email" maxlength="50" required>
          </div>
        
          <div class="input-box">
            <input id="enviar" name="enviar" type="submit" value="Enviar">
          </div>
        </form>
      </div>
      <!-- FIM DO FORMULÁRIO ESQUECEU A SENHA -->
    </div>

  </body>
</html>