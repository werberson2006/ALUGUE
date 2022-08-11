<?php 

class Pages extends Controller {
    
    public function login(){
        $this->view('login');
    }

    public function home(){
        $this->view('home');
    }

    public function locador(){
        $this->view('locador');
    }


}