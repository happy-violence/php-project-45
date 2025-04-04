<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\startGame;

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

function runPrime(): void
{
    $data = [];
    while (count($data) < 3) {
        $num = rand(1, 30);

        $question = "{$num}";
        $correctAnswer = isPrime($num);
        $data[] = [$question, $correctAnswer];
    }

    startGame('Answer "yes" if given number is prime. Otherwise answer "no".', $data);
}
