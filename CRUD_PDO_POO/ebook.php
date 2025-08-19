<?php
    class Ebook {
        private $id;
        private $titulo;
        private $descricao;
        private $isbn;
        private $data_publicacao;
        private $preco;
        private $idioma;
        private $foto;

        public function __construct($titulo, $descricao, $isbn, $data_publicacao, $preco, $idioma, $foto){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->isbn = $isbn;
            $this->data_publicacao = $data_publicacao;
            $this->preco = $preco;
            $this->idioma = $idioma;
            $this->foto = $foto;
        }
        public function inserir(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $titulo = $_POST['titulo'];
                $descricao = $_POST['descricao'];
                $isbn = $_POST['isbn'];
                $data_publicacao = $_POST['data_publicacao'];
                $preco = $_POST['preco'];
                $idioma = $_POST['idioma'];
                $foto = $_POST['foto'];
            
                $stmt = $pdo->prepare("INSERT INTO ebook (titulo, descricao, isbn, data_publicacao, preco, idioma, foto) VALUES (:titulo, :descricao, :isbn, :data_publicacao, :preco, :idioma, :foto)");
                $stmt->bindParam(':titulo', $titulo);
                $stmt->bindParam(':descricao', $descrcao);
                $stmt->bindParam(':isbn', $isbn);
                $stmt->bindParam(':data_publicacao', $data_publicacao);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':idioma', $idioma);
                $stmt->bindParam(':foto', $foto);
                $stmt->execute();
            }
        }

        public function buscar($id){}

        public function buscarTodos(){
            $stmt = $pdo->query("SELECT * FROM ebook");
            $pessoas = $stmt->fetchAll();
        }

        public function atualizar($id){}

        public function deletar($id){}
    }
?>