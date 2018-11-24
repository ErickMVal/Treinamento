<?php

function soma(int ... $valores){

    return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(43, 15);
echo "<br>";
// Por definir os valores como inteiros, ele ignora as casas decimais.
echo soma(1.4, 5.6);
echo "<br>";
echo soma(3, 6, 40, 378);
echo "<br>";





