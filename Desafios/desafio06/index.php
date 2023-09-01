<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 06</title>
</head>

<body>
    <?php
    $minimo = 1_380.60;
    $salario = $_GET['salario'] ?? $minimo;




    ?>
    <main>
        <h1>Sálario mínimo com PHP</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="salario">Salário</label>
            <input type="number" name="salario" id="idsalario" value="$salario" step="0.01">
            <p>Considerando o sálario mínimo de <strong>R$<?= number_format($minimo, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">


        </form>

    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $total = intdiv($salario, $minimo);
        $diferenca = $salario % $minimo;

        echo "<p>Ganha $total sálario mínimo + R\$ " . number_format($diferenca, 2, ",", ".") . ". </p>"

        ?>

    </section>
</body>

</html>