<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATIONS = [
    '+',
    '-',
    '*'
];

function randomOperation(): string
{
    return OPERATIONS[array_rand(OPERATIONS)];
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
            throw new \Exception('Something went wrong, please try again later');
    }
}

function runCalc(): void
{
    $gameData = [];
    while (count($gameData) < NUMBER_OF_ROUNDS) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 10);
        $operation = randomOperation();
        $question = "{$num1} {$operation} {$num2}";
        $correctAnswer = (string) calc($num1, $num2, $operation);
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
