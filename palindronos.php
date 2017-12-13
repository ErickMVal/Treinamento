<?php

$numInicial = readline("Digite um número: ");
$numFinal = readline("Digite outro número: ");

for ($num = $numInicial; $num <= $numFinal; $num++) {
    $sNum = (string)$num;
    if ($sNum === strrev($sNum)) {
        echo " ".$num;
    }
}
