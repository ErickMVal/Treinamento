<?php

function soma(float ... $valores):float {

    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(43, 15);
echo "<br>";
echo soma(1.2, 5.6);
echo "<br>";

