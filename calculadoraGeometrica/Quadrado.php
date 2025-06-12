<?php require_once 'CalculadoraGeometrica.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadrado</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <div class="container">
        <form method="post">

            <label>Lado do quadrado <input type="float" name="lado" step="0.1" required></label><br><br>


            <button type="submit">calcular</button>
        </form>
        <div class="resultado">

            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $calc = new CalculadoraGeometrica();
                $calc->setlado($_POST['lado']);
                $calc->setForma('Quadrado');

                echo "<h3>Resultado:</h3>";
                echo "<p>Forma: " . $calc->getForma() . "</p>";

                echo "Resultado: " . $calc->calcularQuadrado();
            }


            ?>
        </div>
        <a href="./index.php" class="btn-voltar">Voltar para a calculadora</a>
    </div>
</body>

</html>