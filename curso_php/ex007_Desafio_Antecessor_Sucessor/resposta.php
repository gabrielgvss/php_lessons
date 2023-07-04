<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> RESPOSTA </title>

</head>
<body>
    <header>
        <h1>RESPOSTA: </h1>

    </header>
    <main>
        <?php 
            $numero = (integer) $_REQUEST["numero"];
            
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "NÚMERO INSERIDO: <strong> $numero </strong>";
            echo "<p> ANTECESSOR: <strong> $antecessor </strong> <br> </p>";
            echo "<p> SUCESSOR: <strong> $sucessor </strong> <br> <p>";

        ?>
        <button onclick="window.history.back()">Voltar</button>

    </main>
    
</body>
</html>