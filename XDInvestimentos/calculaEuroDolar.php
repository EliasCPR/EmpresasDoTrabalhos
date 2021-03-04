<?php

    $reais = $_GET["valorReais"];
    $unidadeMonetaria = $_GET["unidadeMonetaria"];

    $convercaoDolar = $reais * 5.41;
    $convercaoEuro = $reais * 6.57;

    if ($unidadeMonetaria == "Dolar"){
        echo "<h1>Valor total em $unidadeMonetaria: $ $convercaoDolar</h1>";
    }else{
        echo "<h1>Valor total em $unidadeMonetaria: € $convercaoEuro</h1>";
    }
?>
    
