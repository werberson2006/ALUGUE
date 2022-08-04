<?php 

include_once "header.php";

?>
    <head>
        <title>RECUPERAR SENHA</title>
    </head>

  <body>

    <div class="container">
      <!-- FORMULÁRIO ESQUECEU A SENHA -->
      <div class="login-form">
        
        <div class="img">
          <img class="logo" src="<?php echo base_url("assets/img/logo_verde.png") ?>">
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

.container:hover{
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
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

.container .login-form .title{
    position: relative;
    font-size: 20px;
    font-weight: 500;
    color: rgb(75, 75, 75);
}

.container .login-form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 50px;
    background-color: var(--default-color);
}

.container .login-form .input-box{
    display: flex;
    align-items: center;
    height: 50px;
    width: 100%;
    margin: 15px 0;
    position: relative;
}

.container .login-form .input-box input{
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

.container .login-form .input-box input:focus,
.container .login-form .input-box input:valid{
    border-color: var(--default-color);
}

.container .login-form .input-box input[type="submit"]{
    background-color: var(--default-color);
    border: 0;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    font-size: 22px;
}

.container .login-form .input-box input[type="submit"]:hover{
    background-color: rgb(0, 172, 134);
    transition: all 0.8s ease;
}

.container .login-form .input-box .material-icons{
    position: absolute;
    color: var(--default-color);
    font-size: 17px;
}

.container .login-form .forgot a{
    color: var(--default-color);
    text-decoration: none;
}

.container .login-form .forgot a:hover{
    color: red;
    transition: all 0.4s ease-in-out;
}

.container .login-form .signup-text a{
    color: var(--default-color);
    text-decoration: none;

}

.container .login-form .signup-text a:hover{
    color: rgb(0, 172, 134);
    transition: all 0.8s ease;
}

.container .login-form .img .logo{
    width: 30%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 20px;
}

.text-recupera {
    padding-top: 10px;
}
    </style>

</html>