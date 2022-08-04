<?php

namespace App\Controllers;

class Home extends BaseController {
    
    public function home() {
        return view('home');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to(site_url('/'));
    }

    public function usuario() {
        if(session()->has('nome')){
            echo "Existe usuario logado";
        }
    }
}