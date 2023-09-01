<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>

<body>
    <?php
    $total_segundos = $_GET['segundos'] ?? '0';
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundo">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" min="0" step="1" required value="<?= $total_segundos ?>">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <?php
    $sobra = $total_segundos;
    //Total de Semanas
    $semana = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;
    //Total de Dias
    $dia = (int)$sobra / 86_400;
    $sobra = $sobra % 86_400;
    //Total de Horas
    $hora = (int)$sobra / 3_600;
    $sobra = $sobra % 3_600;
    //Total de Minutos
    $minuto = (int)$sobra / 60;
    $sobra = $sobra % 60;
    //Total de Segundos
    $segundo = $sobra;

    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong> <?= $total_segundos ?> segundos </strong>equivalem
            a um total de:
        </p>
        <ul>
            <li><?= $semana ?> semanas</li>
            <li><?= $dia ?> dias</li>
            <li><?= $hora ?> horas</li>
            <li><?= $minuto ?> minutos</li>
            <li><?= $segundo ?> segundos</li>
        </ul>
    </section>
</body>

</html>