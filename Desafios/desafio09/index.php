<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>

    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    $saque = $_REQUEST['saque'] ?? 0;


    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)
                <sup>*</sup>
            </label>
            <input type="number" name="saque" id="saque" step="5" required value="<?= $saque ?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">

        </form>
    </main>
    <?php
    $resto = $saque;
    //Saque de R$100
    $total100 = floor($resto / 100);
    $resto %= 100;

    //Saque de R$50
    $total50 = floor($resto / 50);
    $resto %= 50;

    //Saque de R$20
    $total20 = floor($resto / 20);
    $resto %= 20;

    //Saque de R$10
    $total10 = floor($resto / 10);
    $resto %= 10;

    //Saque de R$5
    $total5 = floor($resto / 5);
    $resto %= 5;

    ?>
    <section>
        <h2>Saque de R$ <?= number_format($saque, 2, ",", ".")  ?> realizado</h2>
        <p>O caixa eletrônico vai ter entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $total100 ?></li>
            <li><img src="img/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $total50 ?></li>
            <li><img src="img/20-reais.jpg" alt="Nota de 20" class="nota"> x<?= $total20 ?></li>
            <li><img src="img/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $total10 ?></li>
            <li><img src="img/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $total5 ?></li>
        </ul>
    </section>
</body>

</html>