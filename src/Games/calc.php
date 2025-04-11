<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;
use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What is the result of the expression?';

function randomOperation(): string
{
    $operations = [
        '+',
        '-',
        '*'
    ];

    return $operations[array_rand($operations)];
}

function calc(int $num1, int $num2, string $operation): int
{
    switch ($operation) {
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '+':
            return $num1 + $num2;
        default:
            break;
    }
}

function runCalc(): void
{
    $data = [];
    while (count($data) < NUMBER_OF_ROUNDS) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 10);
        $operation = randomOperation();
        $question = "{$num1} {$operation} {$num2}";
        $correctAnswer = calc($num1, $num2, $operation);
        $data[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $data);
}
