<?php 
    require_once "Lutador.php";
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($l1, $l2){
            if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
                $this->aprovada = true;
                $this->desafiante = $l1;
                $this->desafiado = $l2;
                echo "LUTA APROVADA";

            }else{
                $this->aprovada = false;
                $this->desafiante = null;
                $this->desafiado = null;
                echo "LUTA NÃO APROVADA";

            }
        }

        public function lutar(){
            if ($this->aprovada){
                $this->desafiante->status();
                $this->desafiado->status();
                $vencedor = rand(0,2); //0-empate, 1-desafiante , 2- desafiado

                switch($vencedor){
                    case 0:
                        echo "<p> EMPATE </p>";
                        $this->desafiante->empatarLuta();
                        $this->desafiado->empatarLuta();
                        break;

                    case 1:
                        echo "VITÓRIA DO ".$this->desafiante->getNome();
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                    
                    case 2:
                        echo "VITÓRIA DO ".$this->desafiado->getNome();
                        $this->desafiante->perderLuta();
                        $this->desafiado->ganharLuta();
                        break;
                }
            }
        }

    }



?>