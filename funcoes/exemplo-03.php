<?php

function ola($texto = "Mundo", $periodo = "Bom Dia!"){

    return "Olá $texto!! $periodo <br>";

}

echo ola('', "Boa Noite!");
echo ola();
echo ola("Erick", "Boa Tarde");
echo ola("Fernando",'' );

echo "<br>";
echo "<br>";
echo "<br>";

// Parâmetros obrigatórios sempre a esquerda.

function batata($texto, $periodo = "Bom Dia!"){

    return "Olá $texto!! $periodo <br>";

}

echo batata('', "Boa Noite!");
echo batata("Mundo");
echo batata("Erick", "Boa Tarde");
echo batata("Fernando",'' );



