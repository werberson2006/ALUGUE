<?php 

include_once "header.php";

?>

<head>
  <title>ALUGUEL FÁCIL | Home</title>
</head>

<p>Bem vindo <?php echo session()->nome ?>!</p>

<a href="<?php echo site_url('logout'); ?>">SAIR</a>