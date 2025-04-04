<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\startGame;

function isPrime($num): string
{
    $isPrime = '';
    if ($num < 2) {
        $isPrime = 'no';
    } elseif ($num === 2) {
        $isPrime = 'yes';
    } else {
        if ($num % 2 === 0) {
            $isPrime = 'no';
        } else {
            $maxDivider = ceil(sqrt($num));
            for ($i = 3; $i <= $maxDivider; $i++) {
                if ($num % $i === 0) {
                    $isPrime = 'no';
                    break;
                } else {
                    $isPrime = 'yes';
                }
            }
        }
    }

    return $isPrime;
}

function logic(): array
{
    $num = rand(1, 30);

    $userAnswer = prompt("Question: {$num}");
    line("Your answer: {$userAnswer}");
    $correctAnswer = isPrime($num);
    return [$userAnswer, $correctAnswer];
}

startGame('Answer "yes" if given number is prime. Otherwise answer "no".');
