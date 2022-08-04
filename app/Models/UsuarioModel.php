<?php 

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'usuarios';
    
    public function getByEmail(string $email): array {
        $request = $this->where('email', $email)->first();

        return !is_null($request) ? $request : [];
    }
}