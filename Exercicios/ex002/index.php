<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ex 2</title>
</head>

<body>
    <h1> Dados do Servidos</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/M/Y");
    echo " e são exatamente " . date("G:i:s");
    ?>
</body>

</html>