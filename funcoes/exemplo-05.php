<?php

$a = 10;

// O & antes do parâmetro significa passagem de passagem de parâmetro por referência.
function trocaValor(&$b){

    $b += 50;
    return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo trocaValor($a);