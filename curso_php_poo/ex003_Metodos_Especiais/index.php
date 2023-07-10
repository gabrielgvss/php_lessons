<?php
    //TESTE DOS MÉTODOS ESPECIAIS

    require_once "Caneta.php";

    //Instância da classe criando um objeto já inicializado devido ao construtor:
    $caneta = new Caneta ("Bic Cristal", "Azul", 80);

    function printa_caneta($caneta){
        echo "<ul>
        <li> Caneta: " .$caneta->getModelo(). "</li>
        <li> Cor: ". $caneta->getCor(). "</li>
        <li> Carga: ". $caneta->getCarga(). "%</li>
        </ul>
        ";
    }

    printa_caneta($caneta);
    
    $caneta->setModelo("COMPACTOR ECONOMIC");
    $caneta->setCor("AZUL");
    $caneta->setCarga(100);

    printa_caneta($caneta);

?>