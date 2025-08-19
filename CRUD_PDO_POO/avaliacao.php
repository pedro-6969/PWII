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
        public function inserir(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nota = $_POST['nota'];
                $comentario = $_POST['comentario'];
                $data = $_POST['data'];
            
                $stmt = $pdo->prepare("INSERT INTO avaliacao (nota, comentario, data) VALUES (:nota, :comentario, :data)");
                $stmt->bindParam(':nota', $nota);
                $stmt->bindParam(':comentario', $comentario);
                $stmt->bindParam(':data', $data);
                $stmt->execute();
            }
        }

        public function buscar($id){}

        public function buscarTodos(){}

        public function atualizar($id){}

        public function deletar($id){}
    }
?>