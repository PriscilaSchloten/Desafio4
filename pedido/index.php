<?php require_once 'Pedido.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Status Pedido</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<div class="container">

    <body>
        <h2>Status dos Pedidos</h2>
        <form method="post">
            <label>Nome do Produto: <input type="text" name="nomeProduto" required></label><br><br>
            <label>Quantidade: <input type="number" name="quantidade" required></label><br><br>
            <label>Preço Unitário: <input type="number" name="precoUnitario" required></label><br><br>

            <label>Selecione o tipo de cliente:</label><br>
            <input type="radio" name="tipoCliente" value="normal" required> Normal<br>
            <input type="radio" name="tipoCliente" value="premium"> Premium<br><br>
            </label><br><br> <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $func = new Pedido(
                    $_POST['nomeProduto'],
                    $_POST['quantidade'],
                    (float)$_POST['precoUnitario'],
                    ($_POST['tipoCliente'] === 'premium')
                );

                echo "<h3>Resultado:</h3>";
                echo $func->exibirDetalhes();
            }
            ?>
        </div>
        <a href="../index.php" class="btn-voltar">Voltar para a Home</a>
</div>
</body>

</html>