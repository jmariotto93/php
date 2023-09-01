<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <h1>Resultado do processamento</h1>
    <main>
        <?php
        $numero = $_GET["numeroEscolhido"] ?? " ";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "<p>O seu número é $numero.</p>";
        echo "<p>O seu antecessor é $antecessor.</p>";
        echo "<p>O seu sucessor é $sucessor.</p>";

        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
        </p>
    </main>
</body>

</html>