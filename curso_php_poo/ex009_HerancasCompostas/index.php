<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERANÇA COMPOSTA</title>

</head>
<body>
    <main>
        <?php 
            require_once "Pessoa.php";
            require_once "Visitante.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";

            $visitante = new Visitante("João", 23, "M");
            print_r($visitante);

            echo "<br></br>";

            $aluno = new Aluno("Luciana", 13, "F");
            $aluno->setCurso("Informática básica");
            $aluno->setMatricula("1312");
            $aluno->pagarMensalidade();

            print_r($aluno);

            echo "<br></br>";

            $bolsista = new Bolsista("Carla",21,"F");
            $bolsista->pagarMensalidade();
            
            
        
        
        ?>


    </main>
    
</body>
</html>