<?php
    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $tipo;//admin || comum

        public function __construct($nome, $email, $senha, $tipo){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->tipo = $tipo;
        }

        public function inserir(){}

        public function buscar($id){}

        public function buscarTodos(){}

        public function atualizar($id){}

        public function login(){}

        public function logout(){}
    }
?>