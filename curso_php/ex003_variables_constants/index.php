<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> VARIÁVEIS E CONSTANTES </title>
</head>
<body>
    <?php 
        $nome = "José Ricardo";
        $endereco = "Rua do juazeiro, 179";
        $idade = 25;
        $salario = 1927.98;
        const NACIONALIDADE = "Brasileiro"; //Valor imutável

        echo "<p> NOME: $nome </p>";
        echo "<p> ENDEREÇO: $endereco </p>";
        echo "<p> IDADE: $idade </p>";
        echo "<p> SALÁRIO: $salario <p>";
        echo "<p> NACIONALIDADE: ". NACIONALIDADE;
    
    ?>
</body>
</html>