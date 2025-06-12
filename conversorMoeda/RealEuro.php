<?php require_once "Conversor.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real para dollar</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <div class="container">
        <h2> Digite um valor em Reais e coloque a cotação atual da moeda</h2>
        <form method="post">
            <label>R$ <input type="number" name="moedaReais" required></label><br><br>
            <label>Cotação do Euro: <input type="number" step="0.01" name="cotacaoEuro" required></label><br><br>

            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $conv = new Conversor();


                $moeda = $_POST['moedaReais'];
                $conv->setEscolha('euro');
                $conv->setMoedaEuro($_POST['cotacaoEuro']);
                $conv->setMoeda($moeda);


                echo "<h3>Resultado:</h3>";
                echo $conv->converter($conv->getEscolha());
            }
            ?>

        </div>
        <a href="./index.php" class="btn-voltar">Voltar para a calculadora</a>
    </div>
</body>

</html>