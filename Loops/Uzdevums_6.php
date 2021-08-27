<?php

$input=readline("enter levels:");
$piramid = "";
for ($i = 0; $i < $input; $i++) {
    $stars = $i * 8;
    $calculation = (($input - 1) * 8 - $stars) / 2;
    $left = $calculation;
    $right = $calculation;
    $piramid .= str_repeat('/', $left) . str_repeat('*', $stars) . str_repeat('\\', $right) . PHP_EOL;
}
echo $piramid;
