<?php require_once 'Estoque.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<div class="container">

    <body>

        <a href="./Entrada.php">Entrada</a>
        <a href="./Saida.php">Saida</a>
        <?php
        session_start();


        $est = new Estoque();
        $_SESSION['estoque'] = serialize($est);

        ?>
<a href="../index.php" class="btn-voltar">Voltar para a Home</a>
</div>
</body>

</html>