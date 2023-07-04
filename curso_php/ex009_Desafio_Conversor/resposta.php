<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CONVERSOR 1.0 </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1> CONVERSOR DE REAL PARA DÓLAR </h1>

    </header>
    <main>
        <?php 
            $cotacao = 4.81;// 03/07/2023;

            $valor_reais = (float) $_REQUEST["valor"] ?? 0;//0 caso valor em branco;

            $valor_dolar = $valor_reais/$cotacao;

            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            //Utilização de internacionalização monetária (BIBLIOTECA intl)

            echo "<p>VALOR INSERIDO: <strong>".numfmt_format_currency($padrao, $valor_reais, "BRL")."</strong> </p>";

            echo "<p>VALOR EM DÓLAR: <strong>".numfmt_format_currency($padrao, $valor_dolar, "USD")."</strong> </p>";

        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>

    </main>
    
    
</body>
</html>