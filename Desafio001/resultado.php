<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Resultado:</h1>
    </header>
    <main>
        <p>
            <?php

            $result = $_REQUEST["valor"];
            $antecessor = $result - 1;
            $sucessor = $result + 1;
            echo "O antecessor de $result é <strong>$antecessor</strong>";
            echo "<br> O sucessor de $result é <strong>$sucessor</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)"> VOLTAR </button>
    </main>

</body>

</html>