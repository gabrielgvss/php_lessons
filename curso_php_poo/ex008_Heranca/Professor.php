<?php 
    require_once "Pessoa.php";

    //SUB-CLASSE DERIVADA DA CLASSE PESSOA
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function ReceberAumento($aumento){
            $this->setSalario($this->getSalario() + ($this->getSalario() * ($aumento/100)));

        }

        public function getEspecialidade(){
            return $this->especialidade;

        }

        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;

        }

        public function getSalario(){
            return $this->salario;

        }

        public function setSalario($salario){
            $this->salario = $salario;

        }
    }




?>