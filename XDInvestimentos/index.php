<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <h1>Conversão R$ para $ ou  € </h1>
        <div class="input-group">
            <label for="valorConverter">Valor para converter</label>
            <input type="number" name="valorConverter" id="valorConverter" required>
        </div>
        <div>
            <label for="euroDolar">Escolha uma opção</label>
            <input type="radio" name="euroDolar" id="dolar">Dolar
            <input type="radio" name="euroDolar" id="euro">Euro
        </div>
        <div class="input-group">
            <button>calcular</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>