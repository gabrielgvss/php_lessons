<?php 
    require_once "Animal.php";

    class Reptil extends Animal{
        private $cor_escama;

        public function locomover(){
            echo "<p> RÉPTIL RASTEJANDO </p>";

        }

        public function alimentar(){
            echo "<p> COMENDO FOLHAS E VEGETAIS </p>";

        }

        public function emitirSom(){
            echo "<p> SOM DE RÉPTIL </p>";
            
        }

        /**
         * Get the value of cor_escama
         */
        public function getCorEscama()
        {
                return $this->cor_escama;
        }

        /**
         * Set the value of cor_escama
         */
        public function setCorEscama($cor_escama): self
        {
                $this->cor_escama = $cor_escama;

                return $this;
        }
    }



?>