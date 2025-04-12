<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $num1, int $num2): int
{
    while ($num2 !== 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    return $num1;
}

function runGcd(): void
{
    $gameData = [];
    while (count($gameData) < NUMBER_OF_ROUNDS) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 10);

        $question = "{$num1} {$num2}";
        $correctAnswer = gcd($num1, $num2);
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
