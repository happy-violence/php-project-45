<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;
use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): string
{
    if ($num % 2 == 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

function runEven(): void
{
    $data = [];
    while (count($data) < NUMBER_OF_ROUNDS) {
        $num = rand(1, 100);

        $question = "{$num}";
        $correctAnswer = isEven($num);
        $data[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $data);
}
