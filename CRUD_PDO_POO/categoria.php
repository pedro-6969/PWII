<?php
    class Categoria {
        private $id;
        private $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }
        public function inserir(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
            
                $stmt = $pdo->prepare("INSERT INTO categoria (nome) VALUES (:nome)");
                $stmt->bindParam(':nome', $nome);
                $stmt->execute();
            }
        }

        public function buscar($id){}

        public function buscarTodos(){}

        public function atualizar($id){}

        public function deletar($id){}
    }
?>