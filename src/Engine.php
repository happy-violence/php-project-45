<?php
namespace Src\Engine;
require_once __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;



function startGame(string $question): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($question);
    $count = 0;
    while($count < 3) {

        [$userAnswer, $correctAnswer] = logic();
        //сверяем ответ игрока с правильным
        if($userAnswer == $correctAnswer) {
            line('Correct!');
            $count++;
        } else {
            line($userAnswer . ' is wrong answer ;(. Correct answer was ' . $correctAnswer . '. Let\'s try again, ' . $name . '!');
            $count = 0;
        }
    }
    line('Congratulations, ' . $name . '!');
}
