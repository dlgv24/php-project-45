<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Cli\greet;
use function BrainGames\Engine\gameEngine;

const DESCRIPTION = 'What number is missing in the progression?';

function randProgression(): array
{
    $len = rand(5, 10);
    $start = rand(1, 30);
    $step = rand(1, 10);
    $missedIndex = rand(0, $len - 1);

    $elements = [];
    $missed = '';
    for ($i = 0; $i < $len; $i++) {
        $element = $start + $i * $step;
        if ($i == $missedIndex) {
            $elements[] = "..";
            $missed = "{$element}";
            continue;
        }
        $elements[] = "{$element}";
    }

    return [
        'progression' => implode(' ', $elements),
        'missed' => $missed
    ];
}

function run(): void
{
    $name = greet();

    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $res = randProgression();
        $questions[] = $res['progression'];
        $answers[] = $res['missed'];
    }

    gameEngine($name, DESCRIPTION, $questions, $answers);
}
