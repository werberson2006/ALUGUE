<?php 

include_once "header.php";  //CABEÇALHO
include_once "Database/conexao.php"; //INCLUI A CONEXÃO
 

  if(isset($_POST['cadastrar'])){ //VERIFICA SE ENVIOU OS DADOS DO FORMULÁRIO

    //ATRIBUINDO OS DADOS DO FORM ÀS VARIÁVEIS
    $opcao = $_POST['opcao'];
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $senha = md5($senha);
    
    //VERIFICA SE O EMAIL JÁ EXISTE NO BANCO
    $sql = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($result);

    //SE ENCONTRAR UM EMAIL EXISTENTE NO BANCO
    if($rows == 1){
      header("Location: ".URL."/usuarios/cadastro");
    }else {

      //CASO O USUÁRIO AINDA NÃO EXISTA, SEGUE O CADASTRO
      $usuario = "INSERT INTO usuarios (nome, email, senha, acesso) VALUES ('$nome', '$email', '$senha', '$opcao')";
      $resultado = mysqli_query($con, $usuario);

      //SE ENCONTRADO UM NOVO ID, O CADASTRO FOI REALIZADO COM SUCESSO
      if(mysqli_insert_id($con)){
        
        //REDIRECIONA PARA LOGIN
        header("Location: ".URL);
      } else {

        //CASO DÊ ERRO REDIRECIONA PRA TELA DE CADASTRO
        header("Location: ".URL."/usuarios/cadastro");
      }
    }
  }
?>

<head>
  <title><?=APP_NOME ?> | Cadastro</title>
  <link rel="stylesheet" href="<?=URL ?>/public/css/style_cadastro.css">
  
</head>

  <body>

    <div class="container">
      <!-- FORMULÁRIO CADASTRO -->
      <div class="cadastro-form">
        
        <div class="img">
          <img class="logo" src="<?=URL ?>/public/img/logo_verde.png">
        </div>

        <div class="title">Cadastre-se</div>
        
        <form action="" method="POST">

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
            <input id="nome" name="nome"  id="nome" name="nome" type="text" placeholder="Digite seu nome" maxlength="20" minlength="2" >
          </div>

          <div class="input-box">
            <span class="material-icons">email</span>
            <input id="email" name="email" type="email" placeholder="Digite um email" maxlength="50" >
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input id="senha" name="senha" type="password" placeholder="Digite uma senha" minlength="6" maxlength="10" >
          </div>

          <div class="input-box">
            <span class="material-icons">lock</span>
            <input type="password" id="senha2" name="senha2" placeholder="Confirme a senha" minlength="6" maxlength="10" >
          </div>
          
        
          <div class="input-box">
            <input id="cadastrar" name="cadastrar" type="submit" value="Cadastrar">
          </div>

          <div class="signup-text">
            Já tem uma conta? <a href="<?=URL?>/">Entrar</a>
          </div>

          
        </form>
      </div>
      <!-- FIM DO FORMULÁRIO CADASTRO -->
    </div>

    <?php 

      include_once "footer.php";

    ?>

    <script src="<?=URL?>/public/js/funcoes.js"></script>
  </body>
</html>