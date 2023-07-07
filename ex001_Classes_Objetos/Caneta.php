<?php 

class Caneta{
    //ATRIBUTOS:  
    public $nome;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    //MÉTODOS:
    function rabiscar($rabisco){
        if ($this->tampada == true){
            echo "A caneta está tampada, se quiser rabiscar com ela, primeiramente, a destampe.";
            echo "<br></br>";

        }else{
            return $rabisco;
        }

    }

    function tampar(){
        $this->tampada = true;
        echo "A caneta foi tampada.";
        echo "<br></br>";

    }

    function destampar(){
        $this->tampada = false;
        echo "A caneta foi destampada.";
        echo "<br></br>";

    }

}
    

?>