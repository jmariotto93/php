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
        $quantidadeDinheiro = $_GET["quantidadeDinheiro"] ?? " ";

        $cotacao = 4.87;
        $dolar = ($quantidadeDinheiro / $cotacao);

        $preco = number_format($dolar, 2, ',', '.');

        echo "Seus R\$" . number_format($quantidadeDinheiro, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
        </p>
    </main>
</body>

</html>