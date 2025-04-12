<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2, $maxDivider = sqrt($num); $i <= $maxDivider; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime(): void
{
    $gameData = [];
    while (count($gameData) < NUMBER_OF_ROUNDS) {
        $num = rand(1, 30);

        $question = "{$num}";
        $correctAnswer = (isPrime($num)) ? ('yes') : ('no');
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
