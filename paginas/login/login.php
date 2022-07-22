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

    <title>LOGIN</title>
  </head>
  <body>

    <div class="container">
      <!-- FORMULÁRIO LOGIN -->
      <div class="login-form">
        
        <div class="img">
          <img class="logo" src="../../img/logo_verde.png">
        </div>

        <div class="title">Entre com sua conta</div>
        
        <form action="#">
          <div class="input-box">
            <span class="material-icons">email</span>
            <input type="text" placeholder="Digite seu email" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input type="password" placeholder="Digite sua senha" required>
          </div>
          
          <div class="forgot"> <a href="#">Esqueceu a senha?</a></div>
        
          <div class="input-box">
            <input type="submit" value="Entrar">
          </div>

          <div class="signup-text">
            Não tem uma conta? <a href="../cadastro/cadastro.php">Crie uma agora!</a>
          </div>

        </form>
      </div>
      <!-- FIM DO FORMULÁRIO LOGIN -->
    </div>

  </body>
</html>