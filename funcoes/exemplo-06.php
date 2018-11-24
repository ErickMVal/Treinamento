<?php

$pessoa = array(
    'nome'=>'Carlos',
    'idade'=>30
);

foreach ($pessoa as &$value) {

    //if (gettype($value) === 'string') $value ='Marcos';
    if (gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';

}

print_r($pessoa);















