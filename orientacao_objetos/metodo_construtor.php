<?php
//Pascal Case
    class Pessoa {
        //public - variavel acessiva externamente "a classe"
        //private - A variavel está p
        //protected - Está cessível soment por herança
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
                $this->nome = $nome;
                $this->idade = $idade;
        }

        public function Apresentar() {
             echo "A pessoa $this->nome diz Olá";

        }

    }
    //Instância
    $aluno = new Pessoa("Obas", 18);
   // $aluno->nome = "Obas";
   // $aluno->idade = 18;

    $aluno2 = new Pessoa("Tobentos", 1945);
    //$aluno2->nome = "Tobentos";
    //$aluno2->idade = 1945;
 echo "<pre>";
    print_r($aluno);
    print_r($aluno2);
    
?>