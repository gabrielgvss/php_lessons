<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUTADORES</title>
</head>
<body>
    <?php 
        require_once "Luta.php";

        $l1 = new Lutador("DETONA CRÂNIO", "Brasileiro", 27, 1.89, 78, 12, 4, 1);

        $l2 = new Lutador("JOHNNY BRABO", "Brasileiro", 23, 1.79, 98, 10, 0, 0);
       

        $l3 = new Lutador("BANGLADESH BOY", "Chinês", 47, 1.92, 84, 34, 4, 5);

        $luta = new Luta;
        $luta->marcarLuta($l2, $l3);
        $luta->lutar();

        $l2->status();
        $l3->status();


        
    
    
    ?>    

</body>
</html>