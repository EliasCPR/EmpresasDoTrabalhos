<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>Document</title>
</head>
<body>
    <form action="calculopwh.php" method="GET">
        <div class="input-group">
            <label for="nomeCompleto">Digite seu nome completo:</label>
            <input type="text"  name="nomeCompleto" id="nomeCompleto" required placeholder="nome completo">
        </div>

        <div class="input-group">
            <label for="endereco">Digite seu endereço:</label>
            <input type="text"  name="endereco" id="enedereco" required placeholder="ex:Rua e N°">
            <label for="cep">Digite seu CEP:</label>
            <input type="text"  name="cep" id="cep" required placeholder="ex:xxxxx-xxx">

        </div>
        <div class="input-group">
            <label for="kWh">Consumo em kWh:</label>
            <input type="number"  name="kWh" id="kWh" required placeholder="digite seu consumo">
        </div>
        <div>
            <button>Calcular</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>