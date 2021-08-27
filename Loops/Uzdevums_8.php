<?php


$min = (int) readline("Min? = ");
$max = (int) readline("Max? = ");

$range = $max - $min + 1;
for ($i = 0; $i < $range; $i++) {
    for ($j = 0; $j < $range; $j++) {
        echo (($j + $i) % $range + $min);
    }
    echo PHP_EOL;
}
echo "" . PHP_EOL;