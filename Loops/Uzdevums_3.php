<?php
$firstWord=readline("Enter first word: ");
$secondWord=readline("Enter second word: ");
$words=strlen($firstWord) + strlen($secondWord);
var_dump($words);
$maxLen=30;

$spaceLeft=($maxLen-$words);
var_dump($spaceLeft);

echo $firstWord;

for($i=0;$i<=$spaceLeft;$i++)
{
    echo  '.';
}

echo $secondWord;