<?php require_once 'Aluno.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Cálculo de média e status</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <h2>Informações do Aluno</h2>
        <form method="post">
            <label>Nome: <input type="text" name="nome" required></label><br><br>
            <label>Disciplina: <input type="text" name="disciplina" required></label><br><br>
            <label>Nota 1: <input type="number" name="nota1" required></label><br><br>
            <label>Nota 2: <input type="number" name="nota2" required></label><br><br>
            <label>Nota 3: <input type="number" name="nota3" required></label><br><br>
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $func = new Aluno(
                    $_POST['nome'],
                    $_POST['disciplina'],
                    (float)$_POST['nota1'],
                    (float)$_POST['nota2'],
                    (float)$_POST['nota3']
                );

                echo "<h3>Resultado:</h3>";
                echo $func->exibirDetalhes((float)$_POST['nota1'], (int)$_POST['nota2']);
            }
            ?>
        </div>
        <a href="../index.php" class="btn-voltar">Voltar para a Home</a>
    </div>

</body>

</html>