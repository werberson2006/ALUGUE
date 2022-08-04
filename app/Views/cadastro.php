<?php 

include_once "header.php";

?>

<head>
  <title>ALUGUEL FÁCIL | Cadastro</title>
    
  <script src="validate.js" defer></script>
</head>

  <body>

    <div class="container">
      <!-- FORMULÁRIO CADASTRO -->
      <div class="cadastro-form">
        
        <div class="img">
          <img class="logo" src="<?php echo base_url("assets/img/logo_verde.png") ?>">
        </div>

        <div class="title">Cadastre-se</div>
        
        <form action="<?php echo base_url('cadastrar'); ?>" method="POST">

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
            Já tem uma conta? <a href="<?php echo base_url('') ?>">Entrar</a>
          </div>

        </form>
      </div>
      <!-- FIM DO FORMULÁRIO CADASTRO -->
    </div>
  </body>

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    --default-color: #5CC6BA;
}

::selection{
    background-color: var(--default-color);
    color: white;
}


body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--default-color);
    padding: 40px;

    background-image: url("<?php echo base_url("assets/img/fundo_cadastro.png") ?>");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    background-position: center center;
}

.container{
    max-width: 650px;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 40px 30px;
    border-radius: 40px;
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}

.container .cadastro-form .title{
    position: relative;
    font-size: 25px;
    font-weight: 500;
    color: rgb(75, 75, 75);
}

.container .cadastro-form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 50px;
    background-color: var(--default-color);
}

.container .cadastro-form .input-box{
    display: flex;
    align-items: center;
    height: 50px;
    width: 100%;
    margin: 15px 0;
    position: relative;
}

.container .cadastro-form .input-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    padding: 0 30px;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 2px solid rgba(0, 0, 0, 0.2);
    transition: all 0.9s ease;
}

.container .cadastro-form .input-box input:focus,
.container .cadastro-form .input-box input:valid{
    border-color: var(--default-color);
}

.container .cadastro-form .input-box input[type="submit"]{
    background-color: var(--default-color);
    border: 0;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    font-size: 22px;
}

.container .cadastro-form .input-box input[type="submit"]:hover{
    background-color: rgb(0, 172, 134);
    transition: all 0.8s ease;
}

.container .cadastro-form .input-box .material-icons{
    position: absolute;
    color: var(--default-color);
    font-size: 17px;
}

.container .cadastro-form .forgot a{
    color: var(--default-color);
    text-decoration: none;
}

.container .cadastro-form .forgot a:hover{
    color: red;
    transition: all 0.4s ease-in-out;
}

.container .cadastro-form .signup-text a{
    color: var(--default-color);
    text-decoration: none;

}

.container .cadastro-form .signup-text a:hover{
    color: rgb(0, 172, 134);
    transition: all 0.8s ease;
}

.container .cadastro-form .img .logo{
    width: 30%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 20px;
}

.select{
    border: none;
    outline: none;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
}

h5{
    padding-top: 10px;
}
    </style>

</html>