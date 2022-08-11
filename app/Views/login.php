<?php 

session_start();
include_once "header.php";
include_once "Database/conexao.php"; //INCLUI A CONEXÃO

if(isset($_POST['entrar'])){

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $senha = mysqli_real_escape_string($con, $_POST['senha']);
  $senha = md5($senha);

  //VERIFICA SE EXISTE UM USUÁRIO NO BANCO
  $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  $result = mysqli_query($con, $sql);
  $resultado = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) < 1) {

    $_SESSION['mensagem'] = 'Email ou senha inválidos!';
    header("Location: ".URL);

  }else {

    $_SESSION['acesso'] = $resultado['acesso'];
  
    if($_SESSION['acesso'] == "LOCATARIO") {
      
      $_SESSION['nome'] = $resultado['nome'];
      $_SESSION['logado'] = true;
      header('Location: '.URL."/pages/home");

    } else {

      $_SESSION['nome'] = $resultado['nome'];
      $_SESSION['logado'] = true;
      header('Location: '.URL."/pages/locador");
    }
  }
}


?>

  <head>
    <title><?=APP_NOME?> | Login </title>
    <link rel="stylesheet" href="<?=URL ?>/public/css/style_login.css">
  </head>

  <body>

    <div class="container">
      <!-- FORMULÁRIO LOGIN -->
      <div class="login-form">
        
        <div class="img">
          <img class="logo" src="<?=URL?>/public/img/logo_verde.png">
        </div>

        <div class="title">Entre com sua conta</div>
        
        <form action="" method="POST">
          <div class="input-box">
            <span class="material-icons">email</span>
            <input id="email" name="email" type="email" placeholder="Digite seu email" maxlength="50" required>
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input id="senha" name="senha" type="password" placeholder="Digite sua senha" maxlength="10" minlength="6" required>
          </div>
          
          <div class="forgot"> <a href="">Esqueceu a senha?</a></div>
         
          <div class="input-box">
            <input id="entrar" name="entrar" type="submit" value="Entrar">
          </div>

          <div class="signup-text">
            Não tem uma conta? <a href="<?=URL ?>/usuarios/cadastro">Crie uma agora!</a>
          </div>

        </form>
        <!-- FIM DO FORMULÁRIO LOGIN -->

    
        

      </div>
    </div>
    <?php 

      include_once "footer.php";

    ?>
    
  </body>
</html>