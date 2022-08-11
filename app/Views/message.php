<?php 

if(isset($_SESSION['mensagem'])){ 
    $msg = $_SESSION['mensagem'];
    session_unset();
}