<?php 
    //CLASSE CONTA BANCO:
    class ContaBanco{
        //ATRIBUTOS:
        private $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        private const MENSAL = 20;

        //MÉTODOS:
        public function abrirConta($tipo, $dono, $status) {
            $this->geraNumConta();
            $this->dono = $dono;
            $this->setSaldo(20);
            $this->saldo = 20;

        }

        protected function geraNumConta(){//Gera numero/código aleatório para conta:
            $this->numConta = rand(1000, 9999);

        }

        public function fecharConta(){
            if ($this->getStatus() == "ABERTA"){
                $this->status == false;
                
            }
            
        }

        public function depositar($deposito){
            if ($this->getStatus() == "ABERTA"){
                $this->saldo += $deposito;

            }
            
        }

        public function sacar($saque){
            if ($this->saldo < $saque){
                echo "SALDO INSUFICIENTE PARA TAL SAQUE";

            }else{
                $this->saldo -= $saque;

            }
        }

        public function pagarMensal(){
            if ($this->saldo < $this::MENSAL){
                echo "SALDO INSUFICIENTE PARA PAGAMENTO DE VALOR MENSAL";

            }else{
                $this->saldo -= $this::MENSAL;

            }
        }

        //GETTERS AND SETTERS:
        public function getNumConta(){
            return $this->numConta;

        }

        public function getTipo(){
            return $this->tipo;

        }

        public function getDono(){
            return $this->dono;

        }

        public function getSaldo(){
            return $this->saldo;

        }

        public function setSaldo($novo_saldo){
            $this->saldo += $novo_saldo;

        }

        public function getStatus(){
            if ($this->status == true){
                return "ABERTA";

            }else{
                return "FECHADA";

            }
        }

        
        

        

    }



?>