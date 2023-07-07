<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉDIAS</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $num1 = $_GET['num1'] ?? 0;
        $num2 = $_GET['num2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">1º Número:</label>
            <input type="number" name="num1" id="id_num1" value="<?=$num1?>">

            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="id_peso1" value="<?=$peso1?>">

            <label for="num2">2º Número:</label>
            <input type="number" name="num2" id="id_num2" value="<?=$num2?>">

            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="id_peso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular médias">

        </form>

    </main>

    <section>
        <h2>RESULTADOS:</h2>
        <?php 
            $media_aritmetica = ($num1 + $num2) / 2;
            $media_ponderada = (($num1*$peso1) + ($num2*$peso2)) / ($peso1+$peso2);

            echo "<p> MÉDIA ARITMÉTICA DOS NÚMEROS INSERIDOS: <strong> $media_aritmetica </strong> </p>";
            echo "<p> MÉDIA PONDERADA DOS NÚMEROS INSERIDOS: <strong> $media_ponderada </strong> </p>";

        ?>

    </section>
    
</body>
</html>