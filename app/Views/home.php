<?php 

session_start();

include_once "header.php";  //CABEÇALHO
include_once "Database/conexao.php"; //INCLUI A CONEXÃO
include_once "message.php"; //INCLUI A MENSAGEM
  
?>

<head>
  <title><?=APP_NOME ?> | Home</title>
  <link rel="stylesheet" href="<?=URL ?>/public/css/style_home.css">
</head>
<body>

    <nav class="navbar">
        <div class="container-fluid">

            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                    <img src="<?=URL?>/public/img/logo.png" alt="" width="90" height="70">
                    </a>
                </div>
            </nav>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        </div>    
    </nav>

</body>