<?php 
    require_once "Animal.php";

    class Peixe extends Animal{
        private $cor_escama;

        public function locomover(){
            echo "<p> NADANDO </p>";

        }
        public function alimentar(){
            echo "<p> PEIXE SE ALIMENTANDO </p>";

        }
        public function emitirSom(){
            echo "<p> SOM DE PEIXE </p>";
            
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