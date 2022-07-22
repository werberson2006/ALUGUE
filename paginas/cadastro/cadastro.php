<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./estilo.css">  

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" type="imagem/png" href="../../img/favicon.ico" />

    <title>CADASTRO</title>
  </head>
  <body>

    <div class="container">
      <!-- FORMULÁRIO CADASTRO -->
      <div class="login-form">
        
        <div class="img">
          <img class="logo" src="../../img/logo_verde.png">
        </div>

        <div class="title">Cadastre-se</div>
        
        <form action="#">

            <div class="input-field col s12">
            <h5>Tipo de conta:</h5>
                <select class="select" name="op" required>

                <option value="" disabled selected>Escolha uma opção</option>
                <option value="1">SOU LOCADOR</option>
                <option value="2">SOU LOCATÁRIO</option>
                </select>
        </div>
          
        <div class="input-box">
            <span class="material-icons">person</span>
            <input type="text" placeholder="Digite seu nome" required>
          </div>

          <div class="input-box">
            <span class="material-icons">email</span>
            <input type="text" placeholder="Digite um email" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input type="password" placeholder="Digite uma senha" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input type="password" placeholder="Confirme a senha" required>
          </div>
          
        
          <div class="input-box">
            <input type="submit" value="Cadastrar">
          </div>

          <div class="signup-text">
            Já tem uma conta? <a href="../login/login.php">Entrar</a>
          </div>

        </form>
      </div>
      <!-- FIM DO FORMULÁRIO CADASTRO -->
    </div>

  </body>
</html>