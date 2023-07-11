<?php 
    class Lutador{
        //ATRIBUTOS:
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //MÉTODOS ESPECIAIS:
        //Construtor:
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
            $this->setCategoria($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;

        }

        public function status(){
            echo "<p>LUTADOR:</p>";
            echo "<ul>
            <li> Nome: ".$this->getNome().".</li>
            <li> Nacionalidade: ".$this->getNacionalidade().".</li>
            <li> Idade: ".$this->getIdade().".</li>
            <li> Altura: ".$this->getAltura()."m.</li>
            <li> Peso: ".$this->getPeso()."kg.</li>
            <li> Categoria: ".$this->getCategoria().".</li>
            <li> Vitórias: ".$this->getVitorias().".</li>
            <li> Derrotas: ".$this->getDerrotas().".</li>
            <li> Empates: ".$this->getEmpates().".</li>
            </ul>
            ";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);

        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);

        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }


        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;

        }

        public function getNacionalidade()
        {
            return $this->nacionalidade;

        }

        public function setNacionalidade($nacionalidade)
        {
            $this->nacionalidade = $nacionalidade;

        }

        public function getIdade()
        {
            return $this->idade;

        }

        public function setIdade($idade)
        {
            $this->idade = $idade;

        }

        public function getAltura()
        {
            return $this->altura;
        }

        public function setAltura($altura)
        {
            $this->altura = $altura;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;
            $this->setCategoria($peso);

        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        private function setCategoria($peso)
        {
            if ($peso < 52.2){
                $this->categoria = "INVÁLIDO";

            }elseif ($peso <= 70.3){
                $this->categoria = "LEVE";

            }elseif ($peso <= 83.9){
                $this->categoria = "MÉDIO";

            }elseif ($peso <= 120.2){
                $this->categoria = "PESADO";

            }else{
                $this->categoria = "INVÁLIDO";

            }

        }

        public function getVitorias()
        {
            return $this->vitorias;
        }


        public function setVitorias($vitorias)
        {
            $this->vitorias = $vitorias;

        }

        /**
         * Get the value of derrotas
         */
        public function getDerrotas()
        {
            return $this->derrotas;
        }

        /**
         * Set the value of derrotas
         */
        public function setDerrotas($derrotas)
        {
            $this->derrotas = $derrotas;

        }

        /**
         * Get the value of empates
         */
        public function getEmpates()
        {
                return $this->empates;
        }

        /**
         * Set the value of empates
         */
        public function setEmpates($empates)
        {
            $this->empates = $empates;

        }
    }



?>