<?php 
    require_once "Animal.php";

    class Mamifero extends Animal{
        private $cor_pelo;

        public function locomover(){
            echo "<p> MAMÍFERO CORRENDO </p>";

        }

        public function alimentar(){
            echo "<p> MAMANDO </p>";

        }

        public function emitirSom(){
            echo "<p> SOM DE MAMÍFERO </p>";
            
        }

        /**
         * Get the value of cor_pelo
         */
        public function getCorPelo()
        {
                return $this->cor_pelo;
        }

        /**
         * Set the value of cor_pelo
         */
        public function setCorPelo($cor_pelo): self
        {
                $this->cor_pelo = $cor_pelo;

                return $this;
        }
    }



?>