<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TESTE RELACIONAMENTO DE CLASSES </title>
</head>
<body>
    <main>
        <?php 
            require_once "Livro.php";
            require_once "Pessoa.php";

            $pessoa1 = new Pessoa("Gabriel",19,"M");
            $livro1 = new Livro("Filhos do Éden: Anjos da Morte", "Eduardo Spohr", 451, $pessoa1->getNome());
            $livro1->abrir();
            $livro1->folhear(48);
            $livro1->detalhes();

            $pessoa2 = new Pessoa("Valentina", 10, "F");
            $livro2 = new Livro("Diário de um banana", "Jeff Kinney", 196, $pessoa2->getNome());
            $livro2->abrir();
            $livro2->folhear(37);
            $livro2->fechar();
            $livro2->detalhes();

        ?>



    </main>
    
</body>
</html>