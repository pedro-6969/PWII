<?php

    class Forma {
        public function desenhar(){
            echo 'Desenhando uma forma';
            
        }
    }

    class Circulo extends Forma {
        public function desenhar(){
            echo 'Desenhando um circulo';
        }
    }

    class Quadrado extends Forma {
        public function desenhar(){
            echo ' Desenhando um circulo';
        }
    }

    $circulo = new Circulo();
    $quadrado = new Quadro();

    $circulo->desenhar();
    $quadrado->desenhar();
?>