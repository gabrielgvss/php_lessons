<?php 
    class Caneta{
        //ATRIBUTOS:
        private $modelo;
        private $cor;
        private $ponta;
        protected $carga;
        protected $tampada = true;

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

        //MÉTODOS ESPECIAIS:
        //Construtor: (inicializa a classe em sua chamada)
        public function __construct($modelo, $cor, $carga)
        {
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->carga = $carga;
            $this->tampada = true;
        }

        //Getters and Setters (geração automática):
        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of cor
         */
        public function getCor()
        {
                return $this->cor;
        }

        /**
         * Set the value of cor
         */
        public function setCor($cor): self
        {
                $this->cor = $cor;

                return $this;
        }

        /**
         * Get the value of ponta
         */
        public function getPonta()
        {
                return $this->ponta;
        }

        /**
         * Set the value of ponta
         */
        public function setPonta($ponta): self
        {
                $this->ponta = $ponta;

                return $this;
        }

        /**
         * Get the value of carga
         */
        public function getCarga()
        {
                return $this->carga;
        }

        /**
         * Set the value of carga
         */
        public function setCarga($carga): self
        {
                $this->carga = $carga;

                return $this;
        }

        /**
         * Get the value of tampada
         */
        public function isTampada()
        {
                return $this->tampada;
        }

    }

?>