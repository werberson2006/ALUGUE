<?php 

class Rota {

    private $controlador = 'Pages';
    private $metodo = 'login';
    private $param = [];

    public function __construct()
    {
        $url = $this->url() ? $this->url() : [0]; //CHECA SE O CONTROLADOR EXISTE

        if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/Controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;

        if(isset($url[1])){ //CHECA SE O MÉTODO EXISTE

            if(method_exists($this->controlador, $url[1])){
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }

        $this->param = $url ? array_values($url) : []; //VERIFICA SE EXISTE O PARÂMETRO
        call_user_func_array([$this->controlador, $this->metodo], $this->param);
    }

    private function url() {
        
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if(isset($url)){

            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return $url;
        }
    }
}