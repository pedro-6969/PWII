<?php

    class Avaliacao {
        private $id;
        private $nota;
        private $comentario;
        private $data;

        public function __construct($nota, $comentario, $data){
            $this->nota = $nota;
            $this->comentario = $comentario;
            $this->data = $data;
        }

        public function inserir($nota, $comentario, $data){
                $stmt = $pdo->prepare("INSERT INTO avaliacao (nota, comentario, data) VALUES (:nota, :comentario, :data)");
                $stmt->bindParam(':nota', $nota);
                $stmt->bindParam(':comentario', $comentario);
                $stmt->bindParam(':data', $data);
                $stmt->execute();
         }

        public function buscar($id) {
            $stmt = $pdo->query("SELECT * FROM avaliacao WHERE id = $id");
	        $avaliacao = $stmt->fetchAll();
        }

        public function buscarTodos() {
            $stmt = $pdo->query("SELECT * FROM avaliacao");
	        $autor = $stmt->fetchAll();
         }

        public function atualizar($id, $nota, $comentario, $data) { 
            $stmt = $pdo->prepare("UPDATE usuario SET nota = :nota, comentario = :comentario, data = :data WHERE id = :id");
            $stmt->bindParam(':nota', $nota);
            $stmt->bindParam(':comentario', $comentario);
            $stmt->bindParam(':data', $data);
            $stmt->execute();
        }

        public function deletar($id) {
            $stmt = $pdo->prepare('DELETE FROM avaliacao WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }

?>