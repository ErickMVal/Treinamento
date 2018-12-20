<?php

echo "hello world!<br>";
echo date("d/m/y h:i:s", 0);
echo "<br>";
echo time();


$a = time();

echo "<br>";
echo date("d/m/y", "$a");