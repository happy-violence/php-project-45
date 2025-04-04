<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\startGame;

function isEven($num): string
{
    if ($num % 2 == 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
function logic(): array
{
    $num = rand(1, 100);
    $userAnswer = prompt("Question: {$num}");
    $correctAnswer = isEven($num);
    return [$userAnswer, $correctAnswer];
}

startGame('Answer "yes" if the number is even, otherwise answer "no".');
