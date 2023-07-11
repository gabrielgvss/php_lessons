<?php 
    require_once "InterfacePublicacao.php";

    class Livro{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($leitor);

        }

        public function detalhes(){
            echo "<ul> 
            <li> LIVRO: ".$this->getTitulo().".</li>
            <li> AUTOR: ".$this->getAutor().".</li>
            <li> TOTAL DE PÁGINAS: ".$this->getTotPaginas().".</li>
            <li> PÁGINA ATUAL: ".$this->getPagAtual().".</li>
            <li> ESTÁ EM ABERTO? ".$this->getAberto().".</li>
            <li> LEITOR: ".$this->getLeitor().".</li>
            </ul>";
        }

        public function abrir(){
            if (!$this->getAberto()){
                $this->setAberto(true);

            }
        }

        public function fechar(){
            if ($this->getAberto()){
                $this->setAberto(false);

            }
        }

        public function folhear($pagina_de_destino){
            if ($pagina_de_destino > $this->getTotPaginas()){
                $this->setPagAtual(0);

            }else{
                $this->setPagAtual($pagina_de_destino);
            }
        }

        public function avancarPag(){
            if (($this->getAberto()) && ($this->getPagAtual() < $this->getTotPaginas())){
                $this->setPagAtual($this->getPagAtual() + 1);

            }
        }

        public function voltarPag(){
            if ($this->getAberto() && ($this->getPagAtual() > 0)){
                $this->setPagAtual($this->getPagAtual() - 1);

            }
        }


        /**
         * Get the value of titulo
         */
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         */
        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of autor
         */
        public function getAutor()
        {
                return $this->autor;
        }

        /**
         * Set the value of autor
         */
        public function setAutor($autor): self
        {
                $this->autor = $autor;

                return $this;
        }

        /**
         * Get the value of totPaginas
         */
        public function getTotPaginas()
        {
                return $this->totPaginas;
        }

        /**
         * Set the value of totPaginas
         */
        public function setTotPaginas($totPaginas): self
        {
                $this->totPaginas = $totPaginas;

                return $this;
        }

        /**
         * Get the value of pagAtual
         */
        public function getPagAtual()
        {
                return $this->pagAtual;
        }

        /**
         * Set the value of pagAtual
         */
        public function setPagAtual($pagAtual): self
        {
                $this->pagAtual = $pagAtual;

                return $this;
        }

        /**
         * Get the value of aberto
         */
        public function getAberto()
        {
                return $this->aberto;
        }

        /**
         * Set the value of aberto
         */
        public function setAberto($aberto): self
        {
                $this->aberto = $aberto;

                return $this;
        }

        /**
         * Get the value of leitor
         */
        public function getLeitor()
        {
                return $this->leitor;
        }

        /**
         * Set the value of leitor
         */
        public function setLeitor($leitor): self
        {
                $this->leitor = $leitor;

                return $this;
        }
    }




?>