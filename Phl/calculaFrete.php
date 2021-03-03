<?php

const VALOR_PEDAGIO = 9.40 ;
const VALOR_POR_KM = 6.00; 

$cidadeOrigem = $_GET["cidade-origem"];

$cidadeDestino = $_GET["cidade-destino"];

$distancia = $_GET["distancia"];

$pedagio = $_GET["pedagio"];

$valorPedagio = $pedagio * VALOR_PEDAGIO;

$valorDistancia = $distancia * VALOR_POR_KM;

$valorDaViagem = $valorPedagio + $valorDistancia;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>Document</title>
</head>
<body>
    <form>
    <?php
        if($valorPedagio > 100){
    ?>
        <h1 style='color:red'> O valor total dos pedágios é:R$ <?=number_format($valorPedagio,2,",",".")?></h1>
    <?php
        }else{
    ?>
        <h1>O valor total dos pedágios é:<?= number_format($valorPedagio,2,",",".")?></h1>
    <?php
        }
    ?>
    <h1 class="input-group">
        A viagem de <?=$cidadeOrigem?> à <?=$cidadeDestino?> irá custar o valor total de <em>R$<?= number_format($valorDaViagem,2,",",".")?></em>
    </h1>
    </form>
</body>
</html>
