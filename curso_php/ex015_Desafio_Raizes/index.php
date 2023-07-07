<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO RAÍZES</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $numero = (float) ($_GET["numero"] ?? 0);
    
    ?>

    <main>
        <h1>RAÍZES DE UM NÚMERO</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Digite um número: </label>
            <input type="number" name="numero" id="id_numero" value="<?=$numero?>">

            <input type="submit" value="Verificar raízes">
    
        </form>
    </main>

    <section>
        <h2>Resultados</h2>
        <?php 
            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = pow($numero, 1/3);

            echo "<p> RAIZ QUADRADA DE $numero:<strong>".number_format($raiz_quadrada, 3, ",", ".")."</strong> </p>";
            echo "<p> RAIZ CÚBICA DE $numero:<strong>".number_format($raiz_cubica, 3, ",", ".")."</strong> </p>";

        ?>


    </section>
    
</body>
</html>