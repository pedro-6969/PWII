<?php
    class Pessoa {
        public $nome;
        public $email;
    }

    class Aluno extends Pessoa {
        public $rm;
    }

    class Professor extends Pessoa {
         public $formacao;
         public function __construct($nome, $email){
            $this->nome = $nome;
            $this->email = $email;
         }

    }

    $aluno = new Aluno();
    $aluno->nome = 'Seleide';
    $aluno-> = 'se@hotmail.com';

    $aluno = new Professor('Carlitos', 'ca@hotmail.com','ADS');
?>