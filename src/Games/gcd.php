<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $num1, int $num2): int
{
    if ($num2 === 0) {
        return $num1;
    }

    return gcd($num2, $num1 % $num2);
}

function runGcd(): void
{
    $gameData = [];
    while (count($gameData) < ROUNDS_COUNT) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 10);

        $question = "{$num1} {$num2}";
        $correctAnswer = (string) gcd($num1, $num2);
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
