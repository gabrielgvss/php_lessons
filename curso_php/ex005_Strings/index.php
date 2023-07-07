<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> STRINGS PHP</title>
</head>
<body>
    <?php 
        //DOUBLE QUOTED STRINGS (permite formatação/interpolação de string)
        $nome = "Gabriel";
        $sobrenome = " Silveira";

        //CONCATENAR STRINGS COM .
        $code_emoji = "\u{1F596}";
        $nome_completo = $nome.$sobrenome.$code_emoji;
        echo "NOME COMPLETO: $nome_completo";

        //SINGLE QUOTED STRINGS (string literal):
        echo 'NOME COMPLETO: $nome_completo';

        //FUNÇÕES NECESSITAM DA CONCATENAÇÃO PARA QUE POSSA OCORRER SUA SUPOSTA INTERPOLAÇÃO
        echo "  ESTAMOS NO ANO DE ".date('Y');


    ?>
</body>
</html>