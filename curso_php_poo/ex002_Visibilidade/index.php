<?php 
//TESTE DE VISIBILIDADE:
    require_once "Caneta.php";

    $caneta = new Caneta;

    //atributos públicos permitindo atribuição/reatribuição fora da classe;
    $caneta->modelo = "BIC Cristal";
    $caneta->cor = "Azul";
    
    /*Atributos privados/protegidos cuja atribuição/reatribuição geraria erro: 
    $caneta->ponta = "0.8";
    $caneta->carga = "80/100";
    $caneta->tampada = false;
    */
    
    //CHAMADA DE UM MÉTODO PÚBLICO QUE ALTERA O ESTADO DE UM ATRIBUTO PROTEGIDO DA CLASSE:
    $caneta->destampar(); //

    var_dump($caneta);
    echo "<br></br>";
    print_r($caneta);









?>