<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

function randomOperation(): string
{
    $operations = [
        '+',
        '-',
        '*'
    ];

    return $operations[array_rand($operations)];
}

function calc($num1, $num2, $operation): int
{
    switch ($operation) {
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            return $num1 + $num2;
    }
}

function runCalc(): void
{
    $data = [];
    while (count($data) < 3) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 10);
        $operation = randomOperation();
        $question = "{$num1} {$operation} {$num2}";
        $correctAnswer = calc($num1, $num2, $operation);
        $data[] = [$question, $correctAnswer];
    }

    runGame('What is the result of the expression?', $data);
}
