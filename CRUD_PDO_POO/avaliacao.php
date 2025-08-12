<?php
    class Editora {
        private $id;
        private $nota;
        private $comentario;
        private $data;

        public function __construct($nota, $comentario, $data){
            $this->nota = $nota;
            $this->comentario = $comentario;
            $this->data = $data;
        }
        public function inserir(){}

        public function buscar($id){}

        public function buscarTodos(){}

        public function atualizar($id){}

        public function deletar($id){}
    }
?>