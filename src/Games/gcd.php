<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\startGame;

function gcd($num1, $num2): int
{
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    return $num1;
}
function logic(): array
{
    $num1 = rand(1, 20);
    $num2 = rand(1, 10);

    $userAnswer = prompt("Question: {$num1} {$num2}");
    line("Your answer: {$userAnswer}");
    $correctAnswer = gcd($num1, $num2);
    return [$userAnswer, $correctAnswer];
}

startGame('Find the greatest common divisor of given numbers.');
