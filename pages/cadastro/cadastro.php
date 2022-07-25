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

    <script src="validate.js" defer></script>
  </head>
  <body>

    <div class="container">
      <!-- FORMULÁRIO CADASTRO -->
      <div class="cadastro-form">
        
        <div class="img">
          <img class="logo" src="../../img/logo_verde.png">
        </div>

        <div class="title">Cadastre-se</div>
        
        <form action="valida_cad.php" method="POST">

            <div class="input-field col s12">
            <h5>Tipo de conta:</h5>
                <select id="opcao" class="select" name="opcao" required>

                <option value="" disabled selected>Escolha uma opção</option>
                <option value="LOCADOR">SOU LOCADOR</option>
                <option value="LOCATARIO">SOU LOCATÁRIO</option>
                </select>
        </div>
          
        <div class="input-box">
            <span class="material-icons">person</span>
            <input id="nome" name="nome" type="text" placeholder="Digite seu nome" maxlength="20" minlength="2" required>
          </div>

          <div class="input-box">
            <span class="material-icons">email</span>
            <input id="email" name="email" type="email" placeholder="Digite um email" maxlength="50" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input id="senha" name="senha" type="password" placeholder="Digite uma senha" minlength="6" maxlength="10" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input type="password" id="senha2" name="senha2" placeholder="Confirme a senha" minlength="6" maxlength="10" required>
          </div>
          
        
          <div class="input-box">
            <input id="cadastrar" name="cadastrar" type="submit" value="Cadastrar">
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