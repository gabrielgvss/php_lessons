<?php 
    class Caneta{
        //ATRIBUTOS:
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada = true;

        //MÉTODOS ESPECIAIS:
        

        //Getters and Setters:
        public function getModelo(){
            return $this->modelo;

        }
        
        public function setModelo($modelo){
            $this->modelo = $modelo;
            
        }

        //MÉTODOS:
        public function rabiscar($texto){
            if ($this->tampada == true){
                echo "Impossível de rabiscar com caneta tampada!";

            }else{
                echo "<p> $texto </p>";

            }
        }

        public function tampar(){
            $this->tampada = true;

        }

        public function destampar(){
            $this->tampada = false;

        }

    }

?>