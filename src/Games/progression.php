<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What number is missing in the progression?';

function progression(): array
{
    $len = rand(5, 10);
    $progression = [];
    $start = rand(1, 10);
    $step = rand(2, 5);

    for ($i = 0; $i < $len; $i++) {
        $currentElement = $start + $step * $i;
        $progression[] = $currentElement;
    }
    return $progression;
}

function runProgression(): void
{
    $gameData = [];
    while (count($gameData) < NUMBER_OF_ROUNDS) {
        $progression = progression();
        $len = count($progression);
        $hiddenPosition = rand(0, $len - 1);
        $correctAnswer = $progression[$hiddenPosition];
        $progression[$hiddenPosition] = '..';
        $stringProgression = implode(' ', $progression);
        $question = "{$stringProgression}";
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
