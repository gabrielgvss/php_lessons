<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDADES</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $ano_nascimento = $_GET['ano_nascimento'] ?? 0;
        $ano_idade = $_GET['ano_idade'] ?? 0;

    ?>

    <main>
        <h1>Calculando sua idade: </h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nascimento"> Digite o ano em que você nasceu: </label>
            <input type="number" name="ano_nascimento" id="id_ano_nascimento" value="<?=$ano_nascimento?>" >

            <label for="ano_idade"> Digite o ano em que você deseja saber sua idade (<strong>Estamos em 2023</strong>) </label>
            <input type="number" name="ano_idade" id="id_ano_idade" value="<?=$ano_idade?>" >

            <input type="submit" value="Consultar idade" >
    
        </form>
    </main>

    <section>
        <h2>Resultado:</h2>
        <?php 
            $idade = $ano_idade - $ano_nascimento;
            echo "<p>Sua idade em $ano_idade é de <strong> $idade</strong> anos.</p>";
        
        ?>

    </section>
    
</body>
</html>