<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): bool
{
    return ($num % 2 === 0);
}

function runEven(): void
{
    $gameData = [];
    while (count($gameData) < NUMBER_OF_ROUNDS) {
        $num = rand(1, 100);

        $question = $num;
        $correctAnswer = (isEven($num)) ? ('yes') : ('no');
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
