<?php 

spl_autoload_register(function($classe){

    $diretorios = [
        'Libraries',
        'Helpers'
    ];

    //PERCORRE OS DIRETÓRIOS EM BUSCA DAS CLASSES
    foreach($diretorios as $diretorio):

        $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.'.php');
        if(file_exists($arquivo)){

            //INCLUI O ARQUIVO DE CLASSE
            require_once $arquivo;
        }

    endforeach;

});