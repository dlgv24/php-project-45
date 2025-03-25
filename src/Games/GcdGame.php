<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Cli\greet;
use function BrainGames\Engine\gameEngine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}


function run(): void
{
    $name = greet();

    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $res = gcd($num1, $num2);
        $questions[] = "{$num1} {$num2}";
        $answers[] = "{$res}";
    }

    gameEngine($name, DESCRIPTION, $questions, $answers);
}
