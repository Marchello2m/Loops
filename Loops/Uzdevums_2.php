<?php


echo "Input number of terms: ".PHP_EOL;

$i=readline("input i: ".PHP_EOL);
$n= readline("input n :".PHP_EOL);



$result = $i;
for ($x = 0; $x < ($n - 1); $x++)
    $result = $result * $i;

echo"Result: $result".PHP_EOL;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function