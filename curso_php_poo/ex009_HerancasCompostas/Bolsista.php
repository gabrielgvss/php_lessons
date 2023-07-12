<?php 
    require_once "Aluno.php";

    class Bolsista extends Aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "<p> BOLSA RENOVADA </p>";

        }

        public function pagarMensalidade()
        {
            echo "<p>".$this->getNome()." É BOLSISTA, ENTÃO, PAGA COM DESCONTO </p>";
        }

    }




?>