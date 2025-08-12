<?php
//Pascal Case
    class Pessoa {
        //public - variavel acessiva externamente "a classe"
        //private - A variavel está p
        //protected - Está cessível soment por herança
        public $nome;
        public $idade;

        public function Apresentar() {
             echo "A pessoa $this->nome diz Olá";

        }

    }
    //Instância
    $aluno = new Pessoa();
    $aluno->nome = "Obas";
    $aluno->idade = 18;

    $aluno2 = new Pessoa();
    $aluno2->nome = "Tobentos";
    $aluno2->idade = 1945;
 echo "<pre>";
    print_r($aluno);
    print_r($aluno2);
    
?>