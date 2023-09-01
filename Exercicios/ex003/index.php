<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>

<body>

    <?php
    // $numero = 300;
    // var_dump($numero);

    class Pessoa
    {
        private string $nome;
        public int $idade;
    }
    $pessoa  = new Pessoa;
    $pessoa = "Jose";

    $idade = new Pessoa;
    $idade = 30;

    echo "Seu nome é $pessoa " . "e sua idade é $idade."


    ?>
</body>

</html>