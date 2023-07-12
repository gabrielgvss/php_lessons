<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TESTE HERANÇA </title>

</head>
<body>
    <main>
        <?php 
            //import das classes
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";

            function quebraLinha(){
                echo "<br></br>";
            }

            $p1 = new Pessoa("Pedro", 19, "M");
            $p2 = new Aluno("Juvenaldo", 25, "M");
            $p3 = new Professor("Carlos", 54, "M");
            $p4 = new Funcionario("Jurema", 42, "F");

            print_r($p1);
            quebraLinha();
            print_r($p2);
            quebraLinha();
            print_r($p3);

        ?>

    </main>
    
</body>
</html>