<?php

$nomeFuncionario = $_GET["nome"];
$salarioAtual = $_GET["salarioAtual"];

const AUMENTO_10_CENTO = 1.10;
const AUMENTO_20_CENTO = 1.20;

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
            if($salarioAtual >= 5000){
        ?>
        <h1>O <?=$nomeFuncionario?> passará à receber R$ <?=number_format($salarioAtual * AUMENTO_10_CENTO,2,",",".")?></h1>
        <?php       
            }else{
        ?>
        <h1>O <?=$nomeFuncionario?> passará à receber R$ <?=number_format($salarioAtual * AUMENTO_20_CENTO,2,",",".")?></h1>
        <?php      
            }
        ?>
         
    </form>
</body>
</html>