<?php require_once 'IMC.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calcular IMC</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
        <div class="container">

    <h2>Calcular IMC</h2>

    <form method="post">
        <label>Peso(em KG): <input type="number" name="peso" step="0.01" required></label><br><br>
        <label>Altura: <input type="number" name="altura" step="0.01" required></label><br><br>


        <button type="submit">Calcular</button>
    </form>
        <div class="resultado">

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $imc = new Imc();
        $imc->setPeso($_POST['peso']);
        $imc->setAltura($_POST['altura']);

        echo $imc->calcularIMC();
    }
    ?>
      </div>
        <a href="../index.php" class="btn-voltar">Voltar para a Home</a>
    </div>
</body>

</html>