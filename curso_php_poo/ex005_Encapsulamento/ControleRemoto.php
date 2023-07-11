<?php 
    require_once "InterfaceControlador.php";

    class ControleRemoto{
        //ATRIBUTOS:
        private $volume;
        private $ligado;
        private $tocando;

        //MÉTODOS ESPECIAIS:
        //Construtor:
        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        //Getters and Setters:
        public function getVolume()
        {
                return $this->volume;
        }

        public function setVolume($volume)
        {
                $this->volume = $volume;
        }

        public function getLigado()
        {
                return $this->ligado;
        }

        public function setLigado($ligado)
        {
                $this->ligado = $ligado;
        }

        public function getTocando()
        {
                return $this->tocando;
        }

        public function setTocando($tocando)
        {
                $this->tocando = $tocando;
        }

        //IMPLEMENTAÇÃO DOS MÉTODOS ABSTRATOS DA INTERFACE:
        public function ligar(){
            if ($this->getLigado()){
                echo "<p> Controle já está ligado! </p>";

            }else{
                $this->setLigado(true);

            }

        }
        public function desligar(){
            if ($this->getLigado()){
                $this->setLigado(false);

            }
        }
        public function abrirMenu(){
            if ($this->getLigado()){
                echo "<p> -------------- MENU -----------------</p>";

                echo "<br> Está ligado? R:".($this->getLigado()?"SIM</br>":"NÃO</br>");
                echo "<br> Está tocando? R:".($this->getTocando()?"SIM</br>":"NÃO</br>");
                echo "<br> Volume: ".$this->getVolume();
                for ($i = 0; $i <= $this->getVolume(); $i++){
                    echo "|";

                }
            }
        }
        public function fecharMenu(){
            echo "<br> Fechando Menu...</br>";

        }
        public function maisVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 5); //aumento de 5 em 5;

            }
        }
        public function menosVolume(){
            if (($this->getLigado()) && ($this->getVolume() != 0)){
                $this->setVolume($this->getVolume() - 5);
            }
        }
        public function ligarMudo(){
            if ($this->getLigado()){
                $this->setVolume(0);

            }
        }
        public function desligarMudo(){
            if ($this->getLigado()){
                $this->setVolume(50);

            }
        }
        public function play(){
            if ($this->getLigado() && !($this->getTocando()) ){
                $this->setTocando(true);

            }
        }
        public function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);

            }

        }

    }



?>