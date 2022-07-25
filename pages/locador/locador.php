<?php

    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../login/login.php');
    }
    $logado = $_SESSION['email'];
?>
<html lang="pt-br">
    <head>
        
    </head>
    <body>
        <?php 
            echo $_SESSION['acesso'];
        ?>
        <a href="sair.php">SAIR</a>
    </body>
</html>