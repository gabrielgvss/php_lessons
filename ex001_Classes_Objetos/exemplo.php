<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CLASSES E OBJETOS </title>

</head>
<body>
    <?php 
        require_once 'Caneta.php'; //IMPORTANDO CLASSE CRIADA

        $c1 = new Caneta; //INSTÂNCIA DO OBJETO

        $c1->nome = "BIC esferográfica";
        $c1->cor = "azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        var_dump($c1); //MÉTODO MAIS TÉCNICO
        echo "<br></br>";
        print_r($c1); //MÉTODO DE ANÁLISE DE VARIÁVEL MAIS OBJETIVO

        echo "<br></br>";
        $c1->rabiscar("FIZ UM RABISCO COM A CANETA");

        $c1->destampar();
        $c1->rabiscar("FIZ UM RABISCO COM A CANETA");

        

    
    ?>
    
</body>
</html>