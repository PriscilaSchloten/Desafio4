<?php require_once 'Estoque.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="../styles.css">

</head>
<div class="container">

    <body>
        <h2>Controle de Estoque</h2>

        <form method="post" style="margin-top: 20px;">
            <label>Quantidade saída: <input type="number" name="saidaEstoque" required></label><br><br>
            <button type="submit" name="acao" value="saida">Dar Saída</button>
        </form>
        <div class="resultado">

            <?php

            session_start();
            $est = unserialize($_SESSION['estoque']);
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saidaEstoque'])) {

                $est->setSaidaEstoque($_POST['saidaEstoque']);



                echo "<h3>Estoque Atual</h3>";
                echo $est->darSaidaEstoque($est->getSaidaEstoque());
            }
            ?>
        </div>
        <a href="./index.php" class="btn-voltar">Voltar para a saida e entrada</a>
</div>
</body>

</html>