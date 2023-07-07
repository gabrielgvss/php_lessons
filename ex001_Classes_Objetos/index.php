<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TESTE DE CLASSE </title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $caneta = new Caneta;

        $caneta->nome = $_GET['nome_caneta'] ?? "";
        $caneta->cor = $_GET['cor_caneta'] ?? "";
        $caneta->ponta = $_GET['ponta_caneta'] ?? 0;
        $texto = $_GET['texto'] ?? "";
    
    ?>
    

    <main>
        <h1>CRIANDO UMA CANETA:</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nome"> QUAL O TIPO DA SUA CANETA? (nome) </label>
            <input type="text" name="nome_caneta" id="id_nome_caneta" value="<?=$caneta->nome?>">

            <label for="cor"> QUAL A COR DA SUA CANETA? </label>
            <p style="font-size: 0.6em"><sup>*</sup> Cores disponíveis: azul, vermelho, e preto (CASO SEJA DIGITADA UMA COR DIFERENTE DESTAS SERÁ DEFINIDA COMO PRETO)</p>
            <input type="text" name="cor_caneta" id="id_cor_caneta" value="<?=$caneta->cor?>" >
            
            <label for="ponta"> QUAL A PONTA DA SUA CANETA? (Ex: 0.5)</label>
            <input type="number" name="ponta_caneta" id="id_ponta_caneta" step="0.1" min="0" max="2.0" value="<?=$caneta->ponta?>">

            <label for="rabisco"> DIGITE UM TEXTO PARA RABISCO </label>
            <input type="text" name="texto" id="id_texto" value="<?=$texto?>">

            <input type="submit" value="TESTAR">
    
        </form>
    </main>

    <section>
        <h2>CANETA:</h2>

        <?php 
            echo "<ul>
            <li>Tipo: <strong> $caneta->nome </strong></li>
            <li>Cor: <strong> $caneta->cor </strong></li>
            <li>Ponta: <strong> $caneta->ponta</strong></li>
            </ul>"
        ?>

        <h2>TESTE DE RABISCO:</h2>

        <?php
            $caneta->cor = strtoupper($caneta->cor);
            $rabisco = $caneta->rabiscar($texto);
            
            //MUDA ESPESSURA E COR DO TEXTO CONFORME INPUTs
            if ($caneta->cor == "VERMELHO" || $caneta->cor == "VERMELHA") {
                if ($caneta->ponta <= 0.7) {
                    echo "<p style='color: red;'>$rabisco</p>";

                } else {
                    echo "<p style='font-weight: bold; color: red;'>$rabisco</p>";
                }
            }
            elseif ($caneta->cor == "AZUL") {
                if ($caneta->ponta <= 0.7) {
                    echo "<p style='color: blue;'>$rabisco</p>";

                } else {
                    echo "<p style='font-weight: bold; color: blue;'>$rabisco</p>";
                }
            }
            else{
                if ($caneta->ponta <= 0.7) {
                    echo "<p>$rabisco</p>";

                } else {
                    echo "<p style='font-weight: bold;'>$rabisco</p>";
                }
            }

        ?>

    </section>
    
</body>
</html>