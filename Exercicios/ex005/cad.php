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
        $nome = $_GET["nome"] ?? " ";
        $sobrenome = $_GET["sobrenome" ?? " "];
        echo "<p>É um prazer te conhecer $nome $sobrenome.</p>"

        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
        </p>
    </main>
</body>

</html>