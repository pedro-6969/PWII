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
        public function inserir($nome, $biografia, $foto){
            $stmt = $pdo->prepare("INSERT INTO autor (nome, biografia, foto) VALUES (:nome, :biografia, :foto)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':biografia', $biografia);
            $stmt->bindParam(':foto', $foto);
            $stmt->execute();
        }

        public function buscar($id){
            $stmt = $pdo->query("SELECT * FROM autor WHERE id = $id");
            $autores = $stmt->fetchAll();
        }

        public function buscarTodos(){
            $stmt = $pdo->query("SELECT * FROM autor");
            $autores = $stmt->fetchAll();
        }

        public function atualizar($id){}

        public function deletar($id){
            $stmt = $pdo->prepare('DELETE FROM autor WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }
?>