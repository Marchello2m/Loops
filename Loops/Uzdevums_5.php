<?php
//Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet"
// (based on the game "Pig"). The player's goal is to accumulate as many points as possible without rolling a 1.
// Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0. Otherwise,
// they add this number to their running total score. The player then chooses whether to roll again,
// or end the game with their current point total. Here is an example dialogue where the user plays until rolling a 1,
// which ends the game with 0 points:
echo "Welcome to Piglet!".PHP_EOL;
$input=readline("Roll?/yes/no: ");

$points = 0;
while (true) {
    $roll = rand(1, 10);

    echo "You rolled a $roll!" . PHP_EOL;

    if ($roll === 1) {
        echo "You got 0 points!" . PHP_EOL;
        exit;
    }
    $points += $roll;

    $again = readline("Roll again? ");

    if ($again === "no") {
        echo "You got $points points." . PHP_EOL;
        exit;
    }
}