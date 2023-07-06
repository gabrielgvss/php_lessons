<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANATOMIA DE UMA DIVISÃO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;

    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>

        <form action="" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="id_dividendo" min="0" value="<?=$dividendo?>">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="id_divisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar divisão">

        </form>
    </main>
    
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            echo "<ul>
            <li> Dividendo: $dividendo </li>
            <li> Divisor: $divisor </li>
            <li> Quociente: $quociente </li>
            <li> Resto: $resto </li>
            </ul>";

        ?>

        <table class="divisao">
            <tr>
                <td> <?=$dividendo?> </td>
                <td> <?=$divisor?> </td>
            </tr>

            <tr>
                <td> <?=$resto?> </td>
                <td> <?=$quociente?> </td>
            </tr>

        </table>
    </section>
    
</body>
</html>