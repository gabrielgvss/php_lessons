<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPOS PRIMITIVOS</title>
</head>
<body>
    <h1> Teste de tipos primitivos </h1>
    <?php 
        $valor = 3e2;
        echo"VALOR 1 = $valor       ";
        var_dump($valor);
        
        $valor = "129182";
        echo "VALOR 2 = $valor      ";
        var_dump($valor);

        $valor = true;
        echo "VALOR 3 = $valor      ";
        var_dump($valor);

        $valor = -1212;
        echo "VALOR 4 = $valor      ";
        var_dump($valor);

        $valor = "129182";
        echo "VALOR 5 = $valor      ";
        var_dump($valor);

        $valor = [1,2,3,4,5,6];
        var_dump($valor);

    
    ?>
    
</body>
</html>