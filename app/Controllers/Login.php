<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function recupera()
    {
        return view('recupera');
    }

    public function validacao(){
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $usuarioModel = new UsuarioModel();

        $dadosUsuario = $usuarioModel->getByEmail($email);

        if(count($dadosUsuario) > 0){

            $hashUsuario = $dadosUsuario['senha']; 
    
            if($senha == $hashUsuario){
                session()->set('LOGADO', true);
                session()->set('nome', $dadosUsuario['nome']);
                session()->set('acesso', $dadosUsuario['acesso']);
                
                if($dadosUsuario['acesso'] === "LOCADOR"){
                    return redirect()->to('home');
                }else {
                    return redirect()->to('admin');
                }
                
            } else {
                session()->setFlashdata('msg', 'Usuário ou senha incorretos');
                return redirect()->to('/');
            }
        }else {
            session()->setFlashdata('msg', 'Usuário ou senha incorretos');
            return redirect()->to('/');
        }
    }

}
