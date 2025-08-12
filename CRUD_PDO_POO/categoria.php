<?php
    class Categoria {
        private $id;
        private $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }
        public function inserir(){}

        public function buscar($id){}

        public function buscarTodos(){}

        public function atualizar($id){}

        public function deletar($id){}
    }
?>