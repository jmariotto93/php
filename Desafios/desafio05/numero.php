<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 5</title>
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
        $numero = $_POST["numero"] ?? 0;
        echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário";

        $int = (int)$numero;
        $fracionada = $numero - $int;

        echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0, ", ", ".") . "</strong></li></ul>";
        echo "<ul><li>A parte inteira do número é <strong>" . number_format($fracionada, 2, ", ", ".") . "</strong></li></ul>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>