<?php

namespace App\model;

class Usuario {
    private $usuario;
    private $senha;

    public function __construct($usuario, $senha) {
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function verificaAdmin() {
        return $this->usuario === 'admin' && $this->senha === 'admin123';
    }
}
?>
