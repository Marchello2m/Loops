<?php
echo "Lets Roll".PHP_EOL;
echo "Desired sum: 9".PHP_EOL;
$input=readline("Roll?/yes/no: ");

$points = 0;
while (true) {
    $roll = rand(1, 6);
$roll2=rand(1,6);
$summ=$roll+$roll2;
    echo $roll ." and " .$roll2 ." = ".$summ. PHP_EOL;
    if($summ===9){
        echo "You Got Lucky: .$summ".PHP_EOL;
    }
    $again = readline("Roll again? ");

    if ($again === "no") {

        exit;
    }
}