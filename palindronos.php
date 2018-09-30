<?php

$numInicial = (int)$_GET['n1'];//readline("Digite um número: ");
$numFinal = (int)$_GET['n2'];//readline("Digite outro número: ");
if($numInicial >= 0 && $numFinal > $numInicial && is_int($numFinal)) {
    for ($num = $numInicial; $num <= $numFinal; $num++) {
        $sNum = (string)$num;
        if ($sNum === strrev($sNum)) {
            echo " ".$num;
        }
    }
}
else {
    echo "Verifique se você digitou números são respectivamentes:
        .Maior ou igual a zero
        .Maior que o número anterior";
}