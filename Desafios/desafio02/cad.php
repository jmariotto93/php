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
        $numeroMinimo = 0;
        $numeroMaximo = 100;

        $numeroAleatorio = random_int($numeroMinimo, $numeroMaximo);
        echo "<p>O número sorteado é $numeroAleatorio.</p>";

        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
</body>

</html>