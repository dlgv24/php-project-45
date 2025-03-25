<?php

namespace BrainGames\Games\EvenGame;

use function BrainGames\Cli\greet;
use function BrainGames\Engine\gameEngine;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function run(): void
{
    $name = greet();

    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $questions[] = (string) $number;
        $answers[] = isEven($number) ? 'yes' : 'no';
    }

    gameEngine($name, DESCRIPTION, $questions, $answers);
}
