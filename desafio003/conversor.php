<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="styleEx03.css">
</head>

<body>
    <header>
        <h1> Valor convertido:</h1>
    </header>
    <section>
        <?php
        $real = $_REQUEST["Real"];
        $dolarconvert = ($real / 4.98);
        $format = number_format($dolarconvert, 2, ',', '.');

        echo "<p>R\$ $real reais equivalem a <b>U\$ $format (Dólares)</b></p>"


        //$dolar = $real / $cotacao;
        //    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        //    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . "<b>" .  numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)"> NOVA CONVERSÃO </button>

    </section>
</body>


</html>