<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=</strong> device-width, initial-scale=1.0">
    <title> CAIXA ELETRÔNICO </title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 60px;
            margin: 5px;
        }

    </style>

</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
    
    ?>

    <main>
        <h1>SAQUE </strong> de CAIXA ELETRÔNICO: </h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque"> Quantida</strong> de que </strong> deseja sacar (R$): </label>
            <input type="number" name="saque" id="id_saque" min="0" step="0.01" value="<?=$saque?>">

            <p style="font-size: 0.7em"><sup>*</sup>Notas Disponíveis: R$100, R$50, R$20, R$10, R$5 e R$1</p>

            <input type="submit" value="REALIZAR SAQUE">
    
        </form>

    </main>
    <section>
        <h2> SAQUE DE R$<?=number_format($saque, 2, ",", ".")?>: </h2>

        <?php 
            $notas_100 = floor($saque/ 100);
            $resto = $saque % 100;
            
            $notas_50 = floor($resto/ 50);
            $resto %= 50;

            $notas_20 = floor($resto/ 20);
            $resto %= 20;

            $notas_10 = floor($resto/ 10);
            $resto %= 10;

            $notas_5 = floor($resto/ 5);
            $resto %= 5;

            $notas_2 = floor($resto/ 2);
            $resto %= 2;

            $notas_1 = $resto;

            /*echo "<ul>
                <li><strong>$notas_100 </strong> de R$100</li>
                <li><strong>$notas_50 </strong> de R$50</li>
                <li><strong>$notas_20 </strong> de R$20</li>
                <li><strong>$notas_10 </strong> de R$10</li>
                <li><strong>$notas_5 </strong> de R$5</li>
                <li><strong>$notas_1 </strong> de R$1</li>

                  </ul>"
            */
        ?>
        <ul>
            <li> <img src="imagens/100-reais.jpg" alt="NOTA DE R$100" class="nota"> x<?=$notas_100?> </li>    
            <li> <img src="imagens/50-reais.jpg" alt="NOTA DE R$50" class="nota"> x<?=$notas_50?> </li>
            <li> <img src="imagens/20-reais.jpg" alt="NOTA DE R$20" class="nota"> x<?=$notas_20?> </li>
            <li> <img src="imagens/10-reais.jpg" alt="NOTA DE R$10" class="nota"> x<?=$notas_10?> </li>
            <li> <img src="imagens/5-reais.jpg" alt="NOTA DE R$5" class="nota"> x<?=$notas_5?> </li>
            <li> <img src="imagens/2-reais.jpg" alt="NOTA DE R$2" class="nota"> x<?=$notas_2?> </li>
            <li> <img src="imagens/1-real.jpg" alt="NOTA DE R$1" class="nota"> x<?=$notas_1?> </li>
        </ul>
    </section>
    
</body>
</html>