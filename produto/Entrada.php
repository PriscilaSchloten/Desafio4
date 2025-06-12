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

        <form method="post">
            <label>Nome do Produto: <input type="text" name="nomeProduto" required></label><br><br>
            <label>Quantidade entrada: <input type="number" name="entradaEstoque" required></label><br><br>
            <label>Valor unitário: <input type="number" step="0.01" name="valorUnitario" required></label><br><br>
            <button type="submit" name="acao" value="entrada">Dar Entrada</button>
        </form>

        <div class="resultado">

            <?php
            session_start();

            $est = unserialize($_SESSION['estoque']);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nomeProduto = $_POST['nomeProduto'];
                $entrada = $_POST['entradaEstoque'];
                $valorUnitario = $_POST['valorUnitario'];

                $est->setNomeProduto($nomeProduto);
                $est->setEntradaEstoque($entrada);
                $est->setValorUnitario($valorUnitario);

                echo "<h3>Estoque Atual</h3>";
                $est->darEntradaEstoque($est->getEntradaEstoque());
                echo $est->consultarEstoque();
                $_SESSION['estoque'] = serialize($est);
            }

            ?>
        </div>
        <a href="./index.php" class="btn-voltar">Voltar para a saida e entrada</a>
</div>
</body>

</html>