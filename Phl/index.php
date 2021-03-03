<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>Document</title>

</head>

<body>
    <form method="GET" action="calculaFrete.php">
        <h1>Calcular Frete</h1>
        <div class="input-group">
            <label for="origem">Cidade de origem</label>
            <input type="text" name="cidade-origem" required id="origem">
        </div>

        <div class="input-group">
            <label for="destino">Cidade de destino</label>
            <input type="text" name="cidade-destino" required id="destino">
        </div>

        <div class="input-group">
            <label for="distanciaKM">Distância em KM</label>
            <input type="number" name="distancia" required id="distanciaKM">
        </div>

        <div class="input-group">
            <label for="pedagio">Quantidade de pedágios</label>
            <input type="number" name="pedagio" required id="pedagio">
        </div>

        <div class="input-group">
            <button>Calcular</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>

</html>