<!DOCTYPE html>
<html lang="pt-BR">
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Desafios</title>
    <style>
        body {
            background: #e3f0ff;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #222;
            margin: 0;
            padding: 0;
        }

        .container {
            background: #fff;
            max-width: 1200px;
            margin: 3em auto;
            border-radius: 12px;
            box-shadow: 0 2px 16px #0001;
            padding: 2em 1em;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .titulo h1 {
            font-size: 2em;
            margin-bottom: 2em;
            color: #1a237e;
            letter-spacing: 1px;
        }

        .listas-flex {
            display: flex;
            gap: 2em;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
        }

        .listaExercicio,
        .desafioFuncaoMatematica,
        .desafioFuncaoString {
            min-width: 240px;
            max-width: 320px;
            background: #fafdff;
            border-radius: 8px;
            box-shadow: 0 1px 4px #0001;
            padding: 1.5em 1em 1em 1em;
            margin-bottom: 1em;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            border: 2px solid #d0e3fa;
        }

        .listaExercicio {
            border-left: 6px solid #1976d2;
        }

        .desafioFuncaoMatematica {
            border-left: 6px solid #43a047;
        }

        .desafioFuncaoString {
            border-left: 6px solid #fb8c00;
        }

        .listaExercicio h2,
        .desafioFuncaoMatematica h2,
        .desafioFuncaoString h2 {
            font-size: 1.15em;
            margin-bottom: 1.2em;
            text-align: center;
            font-weight: 700;
            letter-spacing: 0.5px;
            background: #e3f0ff;
            padding: 0.5em 0;
            border-radius: 4px;
            color: #1976d2;
        }

        .desafioFuncaoMatematica h2 {
            background: #e8f5e9;
            color: #388e3c;
        }

        .desafioFuncaoString h2 {
            background: #fff3e0;
            color: #ef6c00;
        }

        .link {
            margin: 0.4em 0;
        }

        .link a {
            text-decoration: none;
            color: #1976d2;
            font-size: 1em;
            padding: 0.5em 0.8em;
            border-radius: 4px;
            transition: background 0.2s, color 0.2s;
            display: block;
            text-align: left;
        }

        .link a:hover {
            background: #e3f0ff;
            color: #0d47a1;
        }

        .desafioFuncaoMatematica .link a {
            color: #388e3c;
        }

        .desafioFuncaoMatematica .link a:hover {
            background: #e8f5e9;
            color: #1b5e20;
        }

        .desafioFuncaoString .link a {
            color: #ef6c00;
        }

        .desafioFuncaoString .link a:hover {
            background: #fff3e0;
            color: #e65100;
        }

        @media (max-width: 1100px) {
            .listas-flex {
                flex-direction: column;
                align-items: center;
            }

            .container {
                padding: 1em 0.5em;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Lista de Desafios</h1>
        </div>
        <div class="listas-flex">
            <div class="listaExercicio">
                <h2>Desafios</h2>
                <div class="link"><a href="./funcionario/index.php">Exercício 1: Funcionario</a></div>
                <div class="link"><a href="./aluno/index.php">Exercício 2: Aluno</a></div>
                <div class="link"><a href="./pedido/index.php">Exercício 3: Pedido</a></div>
                <div class="link"><a href="./carro/index.php">Exercício 4: Carro</a></div>
                <div class="link"><a href="./produto/index.php">Exercício 5: Produto</a></div>
                <div class="link"><a href="./conversorMoeda/index.php">Exercício 6: Conversão de Moeda</a></div>
                <div class="link"><a href="./viagem/index.php">Exercício 7: Viagens</a></div>
                <div class="link"><a href="./calculadoraFinanceira/index.php">Exercício 8: Calculadora Financeira</a></div>
                <div class="link"><a href="./pessoa/index.php">Exercício 9: Pessoa</a></div>
                <div class="link"><a href="./reservaHotel/index.php">Exercício 10: Reserva de Hotel</a></div>
                <div class="link"><a href="./calculadoraGeometrica/index.php">Exercício 11: Calculadora Geometrica</a></div>

            </div>
        </div>
</body>

</html>