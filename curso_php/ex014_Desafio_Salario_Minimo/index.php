<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO SALÁRIO MÍNIMO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $salario = (int) ($_GET['salario'] ?? 0);
    
    ?>
    <header>
        <h1>Informe seu salário:</h1>

    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario"> SALÁRIO: </label>
            <input type="text" name="salario" id="id_salario" value=<?=$salario?> >

            <input type="submit" value="Consultar">

        </form>
    </main>

    <section>
        <?php 
            $salario_minimo = 1_320.00;

            $qtd_salarios_minimos = intdiv($salario, $salario_minimo);
            $resto = $salario % $salario_minimo;

            if ($resto == 0){
                echo "<p>Seu salário equivale a <strong>$qtd_salarios_minimos </strong>salário mínimo</p>";

            }else{
                $resto_formatado = number_format($resto, 2, ",", ".");
                echo "<p>Seu salário equivale a <strong>$qtd_salarios_minimos </strong>salários mínimos mais R$ $resto_formatado</p>";
            
            }
        ?>
    </section>
</body>
</html>