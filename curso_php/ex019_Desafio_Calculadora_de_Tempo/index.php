<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA DE TEMPO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <?php 
            $segundos = (int) ($_GET['segundos'] ?? 0);
        
        ?>

        <h1>CALCULADORA DE TEMPO:</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Digite uma quantidade em segundos:</label>
            <input type="number" name="segundos" id="id_segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular tempo">

        </form>
    </main>

    <section>
        <h2>Resultado:</h2>
        
        <?php 
            $semanas = intdiv($segundos, 604800);
            $resto = $segundos % 604800;

            $dias = intdiv($resto, 86400);
            $resto = $resto % 86400;

            $horas = intdiv($resto, 3600);
            $resto = $resto % 3600;

            $minutos = intdiv($resto, 60);
            $resto = $resto % 60;

            echo "<p> $segundos segundos: </strong> ...</p>";
            echo "<p> Equivale a <strong> $semanas </strong> semanas</p>";
            echo "<p> Equivale a <strong> $dias </strong> dias </p>";
            echo "<p> Equivale a <strong> $horas </strong> horas </p>";
            echo "<p> Equivale a <strong> $minutos </strong> minutos </p>";
            echo "<p> Equivale a <strong> $resto </strong> segundos </p>"; 
        
        ?>

    </section>
    
</body>
</html>