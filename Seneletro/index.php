<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <div class="input-group">
            <label for="nomeCompleto">Digite seu nome completo:</label>
            <input type="text"  name="nomeCompleto" id="nomeCompleto" required placeholder="nome completo">
        </div>

        <div class="input-group">
            <label for="estado">Estado:</label>
            <input type="text"  name="estado" id="estado" required placeholder="Digite seu estado">
            <label for="cidade">Cidade:</label>
            <input type="text"  name="cidade" id="cidade" required placeholder="Digite sua cidade">
            <label for="rua">Rua:</label>
            <input type="text"  name="rua" id="rua" required placeholder="Digite sua rua">
            <label for="numero">Numero:</label>
            <input type="number"  name="numero" id="numero" min="0" required placeholder="Digite o número da sua casa">
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