<?php 

session_start();

include_once "header.php";  //CABEÇALHO
include_once "Database/conexao.php"; //INCLUI A CONEXÃO
include_once "message.php"; //INCLUI A MENSAGEM
  
?>

<head>
  <title><?=APP_NOME ?> | Locador</title>
  <link rel="stylesheet" href="<?=URL ?>/public/css/style_home.css">
</head>