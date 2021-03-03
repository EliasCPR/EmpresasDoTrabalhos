<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>Document</title>
</head>
<body>
    <form action="aumentoSalarial.php" method="GET">
        <h1>Digite aqui</h1>
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required placeholder="Nome completo">
        </div>

        <div class="input-group">
            <label for="salarioAtual">Sálario Atual</label>
            <input type="number" name="salarioAtual" id="salarioAtual" min="0" required placeholder="Digite seu sálario">
        </div>
        <div>
            <button>Calcular</button>
            <button type="reset">limpar</button>
        </div> 
    </form>
</body>
</html>