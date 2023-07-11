<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CONTROLE REMOTO </title>

</head>
<body>
    <h1> PROJETO CONTROLE REMOTO </h1>

    <main>
        <?php 
            require_once "ControleRemoto.php";

            //Instância da classe:
            $controle = new ControleRemoto();

            $controle->ligar();
            $controle->abrirMenu();

        ?>

    </main>
    
</body>
</html>