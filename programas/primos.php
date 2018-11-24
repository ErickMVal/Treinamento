<?php
/* Criar um programa que :      liste todos os números primos entre 1 e 1000.
Condições:
1. O programa deve ser executado por linha de comando.
2. Os números deverão ser impressos lado a lado, separados por espaço
*/

echo 'teste';
for ($numPrimo = 1; $numPrimo < 1001; $numPrimo++)
{
    $num = gmp_prob_prime($numPrimo);
    if($num == 2)
    {
        echo " ".$numPrimo;
    }

}
