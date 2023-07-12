<?php 
    require_once "Pessoa.php";
    //SUB-CLASSE DERIVADA DA CLASSE PESSOA:

    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function cancelarMatricula(){
            echo "<p> MATRÍCULA SERÁ CANCELADA.</p>";

        }

        public function getMatricula(){
            return $this->matricula;

        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
            
        }

    }






?>