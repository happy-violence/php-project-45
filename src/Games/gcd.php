<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startGame;

function gcd($num1, $num2): int
{
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    return $num1;
}

function runGcd(): void
{
    $data = [];
    while (count($data) < 3) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 10);

        $question = "{$num1} {$num2}";
        $correctAnswer = gcd($num1, $num2);
        $data[] = [$question, $correctAnswer];
    }

    startGame('Find the greatest common divisor of given numbers.', $data);
}
