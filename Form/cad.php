<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" 
</head>

<body>
    <header>
        <h1> Resultado </h1>
    </header>
    <main>
        <?php
        $n = $_GET["nome"] ?? "Nome desconhecido";
        $s = $_GET["sobrenome"] ?? "e Sobrenome desconhecido";
        echo "É um prazer te conhecer, $n $s. Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)"> Voltar para a página anterior </a></p>
    </main>

</body>

</html>