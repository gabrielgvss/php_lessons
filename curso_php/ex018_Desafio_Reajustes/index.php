<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REAJUSTE DE PREÇOS</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $preco = ($_GET['preco']) ?? '0';
        $reajuste = $_GET['reajuste'] ?? '0';

    ?>

    <main>
        <h1> REAJUSTADOR DE PREÇOS: </h1>

        <form action="" method="get">
            <label for="preco"> Preço do Produto (R$): </label>
            <input type="number" name="preco" id="id_preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reajuste"> Percentual de reajuste: <strong><span id="id_porcentagem">?</span>%</strong> </label>
            <input type="range" name="reajuste" id="id_reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

            <input type="submit" value="REAJUSTAR">

        </form>
    </main>

    <section>
        <h2> RESULTADO DO REAJUSTE: </h2>

        <?php 
            $novo_preco = (float) ($preco + ($preco * ($reajuste/100)));
            echo "<ul>
            <li>PREÇO ANTIGO: R$".number_format($preco, 2, ",", ".")."</li>
            <li>REAJUSTE: R$$reajuste% </li>
            <li>PREÇO NOVO: R$".number_format($novo_preco, 2, ",", ".")."</li>
            ";
        
        ?>

    </section>

    <script>
        mudaValor()
        function mudaValor(){
            //Código js para alternância do valor de porcentagem durante rolagem
            id_porcentagem.innerText = id_reajuste.value;

        }

    </script>
    
    
</body>
</html>