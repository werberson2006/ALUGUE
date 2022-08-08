<?php 

include_once '../Libraries/Database.php';

class Usuario {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function cadastrar($dados){
        
        $this->db->query("INSERT INTO usuarios (nome, email, senha, acesso) VALUES (:nome, :email, :senha, :acesso)");
        $this->db->bind('nome');
    }
}