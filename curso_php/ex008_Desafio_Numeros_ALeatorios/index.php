<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GERADOR DE NÚMEROS ALEATÓRIOS </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1> GERADOR DE NÚMEROS ALEATÓRIOS (0-1000):</h1>

    </header>
    <main>
        <?php 
            $numero_aleatorio = rand(0, 1000);
            echo "<p> Gerando número aleatório...</p>";
            echo "<p> Número aleatório gerado: <strong> $numero_aleatorio </strong> </p>";
        
        ?>

        <button onclick="javascript:document.location.reload()"> Gerar Novamente </button>

    </main>
    
    
</body>
</html>