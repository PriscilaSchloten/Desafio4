<?php require_once 'CalculadoraGeometrica.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <div class="container">
        <form method="post">

            <label>Raio: <input type="float" name="raio" step="0.1" required> </label><br><br>


            <button type="submit">calcular</button>
        </form>
        <div class="resultado">

            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $calc = new CalculadoraGeometrica();
                $calc->setRaio($_POST['raio']);
                $calc->setForma('Circulo');

                echo "<h3>Resultado:</h3>";
                echo "<p>Forma: " . $calc->getForma() . "</p>";

                echo "resultado: " . $calc->calcularCirculo();
            }

            ?>
        </div>
        <a href="./index.php" class="btn-voltar">Voltar para a calculadora</a>
    </div>
</body>

</html>