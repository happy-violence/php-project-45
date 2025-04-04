<?php

namespace BrainGames;

require_once __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

function startGame(string $description, array $data): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    
    foreach ($data as $pair) {
        $correctAnswer = $pair[1];
        $userAnswer = prompt("Question: {$pair[0]}");
        line("Your answer: {$userAnswer}");

        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            // phpcs:ignore
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$correctAnswer} Let's try again, {$name}!");
            break;
        }
    }
    line("Congratulations, {$name}!");
}
