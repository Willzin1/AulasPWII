<?php   
    namespace App\model;

    class Usuario{
        private $nome;
        private $senha;
        private $email;

        public function __construct($nome, $senha, $email){
            $this->nome = $nome;
            $this->senha = $senha;
            $this->email = $email;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getEmail(){
            return $this->email;
        }
    }