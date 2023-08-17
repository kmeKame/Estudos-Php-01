<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="stylee.css">

</head>

<body>
    <header>
        <h1> Exercício: Gerador de Números Aleatórios </h1>
        <section>
            <?php
            define("INFERIOR", 01);
            define("SUPERIOR", 100);
            $aleator = rand(INFERIOR, SUPERIOR);

            echo "<b><p>Número gerado foi: $aleator</p>";
            
            
            ?>
            <button onclick="javascript:document.location.reload()"> Gerar Outro </button>
        </section>
</body>

</html>