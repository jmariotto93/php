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
        //Cotação vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-6 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);
        $cotacao = $dados["value"][0]["cotacaoCompra"];


        $quantidadeDinheiro = $_GET["quantidadeDinheiro"] ?? " ";


        $dolar = ($quantidadeDinheiro / $cotacao);

        $conversao = number_format($dolar, 2, ',', '.');

        echo "Seus R\$" . number_format($quantidadeDinheiro, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
        </p>
    </main>
</body>

</html>