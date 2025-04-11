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

    for ($i = 2, $maxDivider = ceil(sqrt($num)); $i <= $maxDivider; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime(): void
{
    $data = [];
    while (count($data) < NUMBER_OF_ROUNDS) {
        $num = rand(1, 30);

        $question = "{$num}";
        $correctAnswer = (isPrime($num)) ? ('yes') : ('no');
        $data[] = [$question, $correctAnswer];
    }
    
    runGame(DESCRIPTION, $data);
}
