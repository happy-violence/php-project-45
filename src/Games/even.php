<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

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
    while (count($data) < 3) {
        $num = rand(1, 100);

        $question = "{$num}";
        $correctAnswer = isEven($num);
        $data[] = [$question, $correctAnswer];
    }

    runGame('Answer "yes" if the number is even, otherwise answer "no".', $data);
}
