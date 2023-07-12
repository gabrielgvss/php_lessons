<?php 
    abstract class Animal{
        protected $peso;
        protected $idade;
        protected $qtd_membros;
        

        public abstract function locomover();
        public abstract function alimentar();
        public abstract function emitirSom();

        /**
         * Get the value of peso
         */
        public function getPeso()
        {
                return $this->peso;
        }

        /**
         * Set the value of peso
         */
        public function setPeso($peso): self
        {
                $this->peso = $peso;

                return $this;
        }

        /**
         * Get the value of idade
         */
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         */
        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of qtd_membros
         */
        public function getQtdMembros()
        {
                return $this->qtd_membros;
        }

        /**
         * Set the value of qtd_membros
         */
        public function setQtdMembros($qtd_membros): self
        {
                $this->qtd_membros = $qtd_membros;

                return $this;
        }
    }




?>