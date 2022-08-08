<?php 

class Controller {

    public function model($model) {
        require_once '../app/Models/'.$model.'.php';
        return new $model;
    }

    public function database($conexao) {
        
        $data = ('../app/Libraries/'.$conexao.'.php');
        if(file_exists($data)){
            require_once $data;
        }
    }

    
    public function view($view, $dados = []){
        $arquivo = ('../app/Views/'.$view.'.php');
        if(file_exists($arquivo)){
            require_once $arquivo;
        }else {
            die('O arquivo de view não existe!');
        }
    }
}