<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CANETA </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        require_once "Caneta.php"; //IMPORTANDO A CLASSE
        
        //INSTÂNCIA DA CLASSE / CRIAÇÃO DE UM OBJETO A PARTIR DA CLASSE
        $caneta = new Caneta;

        $caneta->modelo = $_GET['modelo'] ?? "";
        $caneta->cor = $_GET['cor'] ?? "";
        $caneta->ponta = $_GET['ponta'] ?? 0;
        
        $texto = $_GET['rabisco'] ?? "";

    ?>

    <main>
        <h1> OBJETO CANETA: </h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="modelo_caneta"> QUAL MODELO DA SUA CANETA? </label>
            <p style="font-size: 0.7em;"><sup>*</sup>Ex: Bic Esferográfica</p>
            <input type="text" name="modelo" id="id_modelo" value="<?=$caneta->modelo?>">

            <label for="cor_caneta"> QUAL A COR DA SUA CANETA? </label>
            <p style="font-size: 0.7em;"><sup>*</sup>Cores Disponíveis: AZUL, VERMELHO, PRETO (Caso seja inserida uma cor senão estas, será definida como PRETO)</p>
            <input type="text" name="cor" id="id_cor" value="<?=$caneta->cor?>">

            <label for="ponta_caneta"> QUAL O MODELO DE PONTA DA SUA CANETA? </label>
            <input type="number" name="ponta" id="id_ponta" step="0.1" min="0" max="2" value="<?=$caneta->ponta?>">

            <label for="rabisco"> INSIRA UM TEXTO PARA TESTAR O RABISCO DA SUA CANETA </label>
            <input type="text" name="rabisco" id="id_rabisco" value="<?=$texto?>">

            <input type="submit" value="ENVIAR INFORMAÇÕES">
    
        </form>
    </main>

    <section>
        <h2> ATRIBUTOS DA CANETA: </h2>

        <?php
            //LISTAGEM DE ATRIBUTOS:
            echo "<ul>
            <li>Modelo: <strong> $caneta->modelo</strong></li>
            <li>Cor: <strong> $caneta->cor</strong></li>
            <li>Ponta:  <strong> $caneta->ponta</strong></li>
            </ul>
            ";
        ?>

        <h2>RABISCO:</h2>

        <?php 
            $caneta->cor = strtoupper($caneta->cor); //DEIXANDO INPUT MAIÚSCULO PARA FACILITAR COMPARAÇÃO
            $texto = $caneta->rabiscar($texto);

            if ($caneta->cor == "VERMELHO" || $caneta->cor == "VERMELHA"){
                if ($caneta->ponta <= 0.7){
                    echo "<p style=color: red;'>$texto</p>";

                }else{
                    echo "<p style='font-weight: bold; color: red;'>$texto</p>";

                }
            }
            elseif ($caneta->cor == "AZUL"){
                if ($caneta->ponta <= 0.7){
                    echo "<p style='color: blue;'>$texto</p>";

                }else{
                    echo "<p style='font-weight: bold; color: blue;'>$texto</p>";

                }
            }
            else{
                if ($caneta->ponta <= 0.7){
                    echo "<p>$texto</p>";

                }else{
                    echo "<p style='font-weight: bold;'>$texto</p>";

                }
            }
        
        
        ?>

    </section>

</body>
</html>