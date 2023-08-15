<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Se apresente:</h1>
        <section>
            <form action="cad.php" method="get">
                <label for="Nome"> Nome </label>
                <input type="text" name="nome" id="idnome" placeholder="Insira seu nome" required>
                <label for="sobrenome"> Sobrenome </label>
                <input type="text" name="sobrenome" id="idsobrenome" placeholder="Insira seu sobrenome" required>
                <input type="submit" value="Enviar">
            </form>
        </section>

    </header>
    <?php



    ?>
</body>

</html>