<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO RETROALIMENTADO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        //Capturando dados do formulário:
        $v1 = $_GET['valor1'] ?? 0;
        $v2 = $_GET['valor2'] ?? 0;
    
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="valor1">Valor 1: </label>
            <input type="number" name="valor1" id="id_valor1" value="<?=$v1 ?>">

            <label for="valor2">Valor 2: </label>
            <input type="number" name="valor2" id="id_valor2" value="<?=$v2 ?>">  

            <input type="submit" value="Somar">

        </form> 
    </main>

    <section id="resultado">
        <h2>Resultado da soma: </h2>
        <?php 
            $soma = $v1 + $v2;
            echo "<p>A soma entre os valores $v1 e $v2 é igual a <strong>$soma </strong></p>"

        ?>

    </section>
    
</body>
</html>