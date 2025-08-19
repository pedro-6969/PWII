<?php
    class Autor {
        private $id;
        private $nome;
        private $biografia;
        private $foto;

        public function __construct($nome, $biografia, $foto){
            $this->nome = $nome;
            $this->biografia = $biografia;
            $this->foto = $foto;
        }
        public function inserir(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
                $biografia = $_POST['biografia'];
                $foto = $_POST['foto'];
            
                $stmt = $pdo->prepare("INSERT INTO autor (nome, biografia, foto) VALUES (:nome, :biografia, :foto)");
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':biografia', $biografia);
                $stmt->bindParam(':foto', $foto);
                $stmt->execute();
            }
        }

        public function buscar($id){}

        public function buscarTodos(){}

        public function atualizar($id){}

        public function deletar($id){}
    }
?>